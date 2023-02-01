<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAssieteRequest;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\CreateTableRequest;
use App\Models\Assiete;
use App\Models\table;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\CreateCategorieRequest;
use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\CreateReservationRequest;
use App\Models\Role;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class ManagerController extends Controller
{
    public function index(){ 
        return redirect()->route('dashboard');
    }


    //===================================GESTION DES EMPLOYES=====================================================
    public function createEmployeeView(){

        $menu = 'employes';
        $roles = Role::all();

        return view('office.manager.employee.create-employee', compact('roles', 'menu'));
    }

    public function createEmployee(CreateEmployeeRequest $request){


        $user= User::query()->create([
            'prename'=>$request->get('prename'),
            'name'=>$request->get('name'),
            'phone'=>$request->get('phone'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'password'=>bcrypt('employe'),
            'status' => 1,
            'isAdmin'=>true,
        ]);

        $user->roles()->attach($request->get('role'));

        return redirect()->route('list-employee');

    }

    public function listEmployee(){
        $menu = 'employes';
        $employes = User::simplePaginate(6);
        return view('office.manager.employee.list-employee', compact('employes', 'menu'));
    }

    public function editEmployee($id){
        $employe = User::findOrFail($id);
        $menu = 'employes';
        return view('office.manager.employee.edit-employe', compact('menu', 'employe'));

    }

    public function updateEmploye(Request $request, $id){
        //  dd($request);
        $request->validate([
            'prename'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            // 'address'=>'required',
            // 'password'=>'required',
            // 'isAdmin'=>'required',
            // 'label'=>'required'
         ]);
         
        $employe = User::findOrFail($id);
        // $role=Role::findOrFail($id);
        $employe->prename=$request->get('prename'); 
        $employe->name=$request->get('name'); 
        $employe->phone=$request->get('phone'); 
        $employe->email=$request->get('email'); 
        // $employe->password=$request->get('password'); 
        // $employe->address=$request->get('address');
        // $employe->isAdmin=$request->get('isAdmin');
        //  $role->label=$request->get('label');
        
        $employe->update();
        // $role->update();

        return redirect()->route('list-employee')->with('success', 'Employer modifier avec succées !');

    }

    public function destroy($id){
        //dd($id);
        $employe=User::findOrFail($id);

        $employe->delete();

        return redirect()->route('list-employee')->with('success','Employee supprimer avec succes!!!');
    }
    public function inactiveEmploye ($id)
    {
        //dd($id);
        $employe = User::find($id);
        $employe->status = false;
        $employe->save();
        return redirect()->route('list-employee');
    }

    public function activeEmploye ($id)
    {
        $employe = User::find($id);
        $employe->status = true;
        $employe->save();
        return redirect()->route('list-employee');
    }

    //=====================================end gestion employes==============================================



    //======================================GESTION DES ROLES===================================================
    public function createRoleView(){

        return view('office.manager.roles.create-role');
    }

    public function createRole(CreateRoleRequest $request){
        //dd($request->all());

        $role = Role::query()->create([
            'label' => $request->get('label'),
        ]);

        return redirect()->route('list-role');
    }


    public function listRole(){

        $menu = 'roles';
        $roles = Role::simplePaginate(2);
        return view('office.manager.roles.list-role', compact('roles', 'menu'));
    }

    public function editRole($id){

        $role = Role::findOrFail($id);
        $menu = 'roles';

        return view('office.manager.roles.edit-role', compact('menu', 'role'));

    }

    public function updateRole(Request $request, $id){

       $request->validate([
            'label'=>'required'
       ]);

       $role=Role::findOrFail($id);
       $role->label=$request->get('label');
       $role->update();

        return redirect()->route('list-role')->with('success', 'role modifier avec succées !');
    }
    public function destroyRole($id){
        //dd($id);
        $role=Role::findOrFail($id);

        $role->delete();

        return redirect()->route('list-role')->with('success','Role supprimer avec succes!!!');
    }
    //======================================end roles=========================================================

    //====================================GESTION DES CATEGORIES=============================================
    public function createCategorieView(){
       
        return view('office.manager.categorie.create-categorie');
    }


    public function createCategorie(CreateCategorieRequest $request){
        // dd($request->all());
        $fileName = $request->image->getClientOriginalName();
        $filePath = 'uploads/' . $fileName;
 
        $path = Storage::disk('public')->put($filePath, file_get_contents($request->image));
        $path = Storage::disk('public')->url($path);
        $categorie = Categorie::query()->create([
            'name'=>$request->get('name'),
            'description' => $request->get('description'),
            'image' => $fileName,
          
        ]);

        return redirect()->route('list-categorie');
    }

    public function listCategorie(){

        $menu = 'categories';
        $categories = Categorie::simplePaginate(5);
        return view('office.manager.categorie.list-categorie', compact('categories', 'menu'));
    }

    public function editCategorie($id){

        $categorie = Categorie::findOrFail($id);
        $menu = 'categories';

        return view('office.manager.categorie.edit-categorie', compact('categorie', 'menu'));
    }

    public function updateCategorie(Request $request, $id){

       $request->validate([
            'name'=>'required',
            'image'=>'required',
            'description'=>'required',
       ]);

       $categorie=Categorie::findOrFail($id);

       $image=$categorie->image;
       if($request->hasFile('image')){
        Storage::delete($categorie->image);
        $image=$request->file('image')->store('uploads/');
       }

       $categorie->update([
        'name'=>$request->name,
        'description'=>$request->description,
        'image'=>$image
       ]);

    //    $categorie->name=$request->get('name');
    //    $categorie->image=$request->get('image');
    //    $categorie->description=$request->get('description');
    //    $categorie->update();

        return redirect()->route('list-categorie')->with('success', 'categorie modifier avec succées !');


    }
    public function destroyCategorie($id){
        $categorie=Categorie::findOrFail($id);

        $categorie->delete();

        return redirect()->route('list-categorie')->with('success','categorie supprimer avec succes!!!');
    }
    //=====================================end categorie===================================================

    //========================================GESTION DES ASSIETES=========================================
    public function createAssieteView(){

        $menu = 'assietes';
        $categories = Categorie::all();

        return view('office.manager.assiete.create-assiete', compact('categories', 'menu'));
    }


    public function createAssiete(CreateAssieteRequest $request){
        // dd($request->all());
        // $request->validated();
        $fileName = $request->image->getClientOriginalName();
        $filePath = 'uploads/' . $fileName;
 
        $path = Storage::disk('public')->put($filePath, file_get_contents($request->image));
        $path = Storage::disk('public')->url($path);

        $assietes = Assiete::query()->create([

            'name' => $request->get('name') ,
            'categorie_id' => $request->get('categorie_id'),
            'image' =>  $fileName,
            'detail' => $request->get('detail'),
            'price' => $request->get('price'),
            'status' => 1

        ]);

        return redirect()->route('list-assiete');
    }

    public function listAssiete(){

        $menu = 'assietes';
        $assietes = Assiete::simplePaginate(5);
        return view('office.manager.assiete.list-assiete', compact('assietes', 'menu'));
    }

    public function editAssiete($id){

        $assiete = Assiete::findOrFail($id);
        $menu = 'assietes';

        return view('office.manager.assiete.edit-assiete', compact('menu', 'assiete'));

    }

    public function updateAssiete(Request $request, $id){

       $request->validate([
            'name'=>'required',
            'image'=>'required',
            'detail'=>'required',
            'price'=>'required',
            // 'status'=>'required',
       ]);

       $assiete=Assiete::findOrFail($id);

       $image=$assiete->image;
       if($request->hasFile('image')){
        Storage::delete($assiete->image);
        $image=$request->file('image')->store('uploads/');
       }

       $assiete->update([
        'name'=>$request->name,
        'image'=>$image,
        'detail'=>$request->detail,
        'price'=>$request->price,
       ]);

        return redirect()->route('list-assiete')->with('success', 'assiete modifier avec succées !');
        
    }

    public function destroyAssiete($id){

        $assiete=Assiete::findOrFail($id);

        $assiete->delete();

        return redirect()->route('list-assiete')->with('success','Assiete supprimer avec succes!!!');

    }

    public function inactiveAssiete ($id)
    {
        $assiete = Assiete::find($id);
        $assiete->status = 0;
        $assiete->save();
        return redirect()->route('list-assiete');
    }

    public function activeAssiete ($id)
    {
        $assiete = Assiete::find($id);
        $assiete->status = 1;
        $assiete->save();
        return redirect()->route('list-assiete');
    }

    //=================================end assiete================================================

    //==================================GESTION DES TABLES=======================================

    public function createTableView(){
        

        return view('office.manager.table.create-table');

    }

    public function createTable(CreateTableRequest $request){

        //dd($request->all());

        $tables = table::query()->create([

            'name' => $request->get('name'),
            'places' => $request->get('places')

        ]);

        return redirect()->route('list-table');

    }

    public function listTable(){

        $menu = 'tables';
        $tables = Table::simplePaginate(2);

        return view('office.manager.table.list-table', compact('tables', 'menu'));

    }

    public function editTable($id){

        $table = Table::findOrFail($id);
        $menu = 'tables';

        return view('office.manager.table.edit-table', compact('menu', 'table'));

    }

    public function updateTable(Request $request, $id){

       $request->validate([
            'name'=>'required',
            'places'=>'required',
            'status'=>'required'
       ]);

       $table=Table::findOrFail($id);
       $table->name=$request->get('name');
       $table->places=$request->get('places');
       $table->status=$request->get('status');
       $table->update();

        return redirect()->route('list-table')->with('success', 'table modifier avec succées !');
    }

    public function destroyTable($id){
        $table=Table::findOrFail($id);

        $table->delete();

        return redirect()->route('list-table')->with('success','Table supprimer avec succes!!!');        
    }

    //======================================end gestion table==============================================

    //=====================================-produit stocké en magasin=====================================--------------

    public function createProductView(){

        $menu = 'products';
        return view('office.manager.product.create-product', compact('menu'));

    }

    public function createProduct(CreateProductRequest $request){
       // dd($request->all());

        $products = Product::query()->create([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'quantity' => $request->get('quantity'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('list-product');

    }

    public function listProduct(){
        $menu = 'products';
        $products = Product::simplePaginate(2);
        return view('office.manager.product.list-product', compact('products', 'menu'));

    }

    public function editProduct($id){

        $product = Product::findOrFail($id);
        $menu = 'products';

        return view('office.manager.product.edit-product', compact('menu', 'product'));

    }

    public function updateProduct(Request $request, $id){

       $request->validate([
            'name'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'description'=>'required',
       ]);

       $product=Product::findOrFail($id);
       $product->name=$request->get('name');
       $product->quantity=$request->get('quantity');
       $product->price=$request->get('price');
       $product->description=$request->get('description');
       $product->update();

        return redirect()->route('list-product')->with('success', 'Produit modifier avec succées !');
    }
    public function destroyProduct($id){
        $product=Product::findOrFail($id);

        $product->delete();

        return redirect()->route('list-product')->with('success','Produit supprimer avec succes!!!');        
    }

    //---------------------------------------end product=====================================-----

    // =========================================GESTION DES RESERVATIONS==============================================
    public function createReservationView(){

        $menu = 'reservation';
        return view('office.manager.reservation.create-reservation', compact('menu'));

    }

    public function createReservation(CreateReservationRequest $request){

        $reservations = Reservation::query()->create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'tel_number' => $request->get('tel_number'),
            'email' => $request->get('email'),
            'table_id' => $request->get('table_id'),
            'res_date' => $request->get('res_date'),
            'places' => $request->get('places')
        ]);

        return redirect()->route('list-reservation');

    }

    public function listReservation(){
        $menu = 'reservation';
        $reservations = Reservation::simplePaginate(6);
        return view('office.manager.reservation.list-reservation', compact('reservations', 'menu'));
    }
    // =========================================FIN GESTION DES RESERVATIONS==============================================
}
