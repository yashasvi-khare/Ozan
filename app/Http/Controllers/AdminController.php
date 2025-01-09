<?php
namespace App\Http\Controllers;
use App\Models\BrandMenu;
use Illuminate\Http\Request;
use App\Models\MarketProduct;
use App\Models\Admin;
use App\Models\CafeMenu;
use App\Models\CafeProduct;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{

    public function index()
    {
        return redirect()->route('admin.dashboard');
    }
    public function login(Request $request)
    {
        $user = Admin::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('admin.dashboard');
        }
    }


    public function register(Request $req)
    {
        // mainly inn sb codes ko
        // config.php change ki hai maine Admin se login k liye
        // + admin.php me extends Authenticable lagaya jaata hai
        // carefully observe krogi to smjh aa ajaega
        // nikal raha hu ok
        // always try to use try-catch
        try
        {
            // Define validation rules
            $validator = Validator::make($req->all(), [
                'name' => 'required|string|max:255', // Name must be a string
                'email' => 'required|email|unique:admins,email', // Email must be valid and unique in the admins table
                'password' => [
                    'required',
                    'string',
                    'min:6',
                ],
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors(),
                ], 422); // Unprocessable Entity status code
            }
            // by default login users table se hota hai

            // Validation passed, create the Admin record
            $admin = Admin::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password), // Hash method hi use hota hai laravel me default
            ]);

            // return response()->json([ // jaisa ki maine btaya tha , json resp tb return krte h jb ajax se request ho
            //     'status' => 'success', // form submit ki request hoti hai to return back() ya return redirect krte h
            //     'data' => $admin,
            // ], 201);

            return redirect()->route('admin.login_view'); // register ho jaane par login karane k liye bheja jata hai

        } catch (\Throwable $th) {
            //throw $th;
            dd($th->getMessage());
        }
    }

    public function products(Request $request)
    {
        $products = MarketProduct::all();
        return view('admin.products', compact('products'));
    }


    public function createproduct()
    {
        return view('admin.createproduct');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'picture' => 'required|image|max:1024',
        //     'description' => 'required|string|max:255',
        //     'price' => 'required|integer',
        //     'quantity' => 'required|integer',
        //     'category' => 'required|integer',
        //     'discount' => 'required|integer',
        // ]);
        if($request->image)
    {
        $path = $request->file('image')->store($request->category, 'public');
    }
        try {
            $payload = [
                'title' => $request->title,
                'picture' => $path??null,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'category' => $request->category,
                'brand_id' => $request->brand_id,
                'discount' => $request->discount,
            ];
            if(!$request->quantity) unset($payload['quantity']);
            MarketProduct::create($payload);

        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = MarketProduct::findOrFail($id); // Retrieve the product record or fail with 404
        return view('admin.edit', compact('product')); // Return the edit view
    }

    public function settings(){
        return view('admin.settings');
    }

    public function updateSettings(Request $request)
    {
        if ($request->hasFile('banner_img')) {
            $path = $request->file('banner_img')->store('images', 'public');
            Setting::where('name', 'banner_img')->update([
                'value' => $path
            ]);
        }

        if ($request->hasFile('hot_deal_img')) {
            $path = $request->file('hot_deal_img')->store('images', 'public');
            Setting::where('name', 'hot_deal_img')->update([
                'value' => $path
            ]);
        }

        if($request->price_visibility)
        {
            Setting::where('name', 'price_visibility')->update([
                'value' => $request->price_visibility
            ]);
        } else {
            Setting::where('name', 'price_visibility')->update([
                'value' => null
            ]);
        }

        if($request->hot_deal_text)
        {
            Setting::where('name', 'hot_deal_text')->update([
                'value' => $request->hot_deal_text
            ]);
        }


        return back()->with('success', 'Product updated successfully.');
    }


    public function update(Request $request, $id)
    {

        $product = MarketProduct::findOrFail($id);


        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'price' => 'required|numeric|min:0',
        //     'quantity' => 'required|integer|min:1',
        //     'category' => 'required|string',
        //     'discount' => 'nullable|numeric|min:0|max:100',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);


        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->picture = $path;
        }

        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'discount' => $request->discount,
        ]);


        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');

}


public function cafesettings()
{
    return view('admin.cafesettings');
}

public function cafemenus(Request $request)
{
    $menus = CafeMenu::all();
    return view('admin.cafemenus', compact('menus'));

}

public function cafeproducts(Request $request)
{
    $products = CafeProduct::all();
    return view('admin.cafeproducts', compact('products'));

}
public function createcafeproduct()
{
    return view('admin.createcafeproduct');
}

public function productstore(Request $request)
{
    $payload= [
        'menu_id' => $request->menu_id,
        'name' => $request->name,
        'status' => $request->status!==null,
        'price' => $request->price,
    ];
    if($request->image)
    {
        $path = $request->file('image')->store('images', 'public');
        $payload['image'] = $path;
    }
    try {
        $created = CafeProduct::create($payload);
        if($created->count())
        {
            return redirect()->route('admin.cafeproducts')->with('success', 'CafeProduct created successfully.');
        }else {
            return back()->with('error', 'Failed to create the product');
        }
    } catch (\Throwable $th) {
        Log::info("Erorr while creating product for o-cafe : ".$th->getMessage());
        return back()->with('error', 'Failed to create the product');
    }

}

public function storeMenu(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $path = $request->file('image')->store('Ocafe/menus', 'public');
    $created = CafeMenu::create([
        'name' => $request->name,
        'image' => $path
    ]);
    if($created->count())
    {
        return redirect()->route('admin.cafemenus')->with('success', 'Menu created successfully');
    } else {
        return back()->with('error','Something went wrong!');
    }

}

public function storeBrand(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $path = $request->file('image')->store('brands', 'public');
    $created = BrandMenu::create([
        'name' => $request->name,
        'image' => $path
    ]);
    if($created->count())
    {
        return redirect()->route('admin.brands')->with('success', 'Brand created successfully');
    } else {
        return back()->with('error','Something went wrong!');
    }

}

public function deleteMenu($id){
    if(CafeMenu::whereId($id)->delete())
    {
        return back()->with('success', 'Menu removed successfully!');
    }else {
        return back()->with('error', 'Failed to remove the menu!');
    }
}
public function deletebrand($id){
    if(BrandMenu::whereId($id)->delete())
    {
        return back()->with('success', 'Brand removed successfully!');
    }else {
        return back()->with('error', 'Failed to remove the brand!');
    }
}

public function removeCafeProduct($id){
    if(CafeProduct::whereId($id)->delete())
    {
        return back()->with('success', 'Menu removed successfully!');
    }else {
        return back()->with('error', 'Failed to remove the menu!');
    }
}



public function editCafeMenus($id)
{
    $cafemenu= CafeMenu::findOrFail($id);
    return view('admin.editcafemenus', compact('cafemenu'));
}


public function updateMenu(Request $request, $id)
{
    $CafeMenu = CafeMenu::findOrFail($id);
    if($request->has('image'))
    {
        $path = $request->file('image')->store('Ocafe/menus', 'public');
        $CafeMenu->update([
            'name' => $request->name,
            'image' => $path
        ]);
    } else {
        $CafeMenu->update([
            'name' => $request->name,
        ]);
    }

    return redirect()->route('admin.cafemenus')->with('success', 'Menus updated successfully.');
}



public function editCafeProduct($id)
{
    $cafeproducts= CafeProduct::findOrFail($id);
    return view('admin.editcafeproduct', compact('cafeproducts'));
}

public function updateProduct(Request $request, $id)
{
    $Cafeproducts = CafeProduct::findOrFail($id);
    // dd($request->all());
    $Cafeproducts->update([
        'name' => $request->name,
        'menu_id' => $request->menu_id,
        'status' => $request->status??false,
        'price' => $request->price,
    ]);

    return redirect()->route('admin.cafeproducts')->with('success', 'Products updated successfully.');
}
}

