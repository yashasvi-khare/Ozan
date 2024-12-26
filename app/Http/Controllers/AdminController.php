<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function index()
    {
        return redirect()->route('admin.dashboard');
    }
    public function login(Request $request)
    { 
        // dd($request->All());
        $user = Admin::where('email', $request->email)->first();
        // dd($user->password, $request->password);
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('admin.dashboard');
        }
    } 

    
    public function register(Request $req)
    {
        // mainly inn sb codes ko
        // config.php change ki hai maine Admin se login k liye
        // + Admin.php me extends Authenticable lagaya jaata hai
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
        $products = Product::all();
        return view('Admin.products', compact('products'));   
    }


    public function createproduct()
    {
        return view('Admin.createproduct');
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
        $path = $request->file('image')->store('images', 'public');
        // dd([
        //     'title' => $request->title,
        //     'picture' => $path,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'quantity' => $request->quantity,
        //     'category' => $request->category,
        //     'discount' => $request->discount,
        // ]);
        try {
            Product::create([
                'title' => $request->title,
                'picture' => $path,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'category' => $request->category,
                'discount' => $request->discount,
            ]);
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
        
        return redirect()->route('products')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id); // Retrieve the product record or fail with 404
        return view('Admin.edit', compact('product')); // Return the edit view
    }

    public function settings(){
        return view('Admin.settings');
    }

    public function updateSettings(Request $request)
    {
        dd($request->all());
    }
    
    public function update(Request $request, $id)
    {
        
        $product = Product::findOrFail($id);
    
      
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'category' => 'required|string',
            'discount' => 'nullable|numeric|min:0|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
    
       
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->picture = $path; 
        }
    
     
        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category' => $request->category,
            'discount' => $request->discount,
        ]);
    
    
        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
    }
    
 
}


