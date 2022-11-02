public function newRegister(Request $request)
{
    // return $request->all();




        $rules = [
            'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required',
            'shop_name' => 'required',
            'shop_owner' => 'required',
            'vendor_Affiliation' => 'required',
            'registration_number' => 'required',
            'vendor_about' => 'required',
            'established_year' => 'required',
            'number_of_litters' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'helth_check' => 'required',
            'email' => 'required|email|unique:vendors,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
        $customMessages= [
            'first_name.required' => 'first_name is requires',
            'last_name.alpha' => 'Valid last_name is required',
            'email.email' => 'asad Valid Email is required',
            'password.required' => 'Password is required...',
            'shop_name.required' => 'Shop Name is Required...',
            'shop_owner.required' => 'Shop Owner is Required...',
            'vendor_Affiliation.required' => 'Vendor Affiliation is Required...',
            'registration_number.required' => 'Registration Number is Required...',
            'vendor_about.required' => 'Vendor About is Required...',
            'established_year.required' => 'Established Year is Required...',
            'number_of_litters.required' => 'Number Of Litters is Required...',
            'country.required' => 'Country is Required...',
            'state.required' => 'State is Required...',
            'city.required' => 'City is Required...',
            'helth_check.required' => 'Helth Check is Required...',

        ];
        $this->validate($request,$rules,$customMessages);
        if($request->isMethod('post')){
            $data = $request->all();
            $vendorCount = Admin::where('email',$data['email'])->count();
            if($vendorCount > 0 ){
                $message ="This Email id is alread exists use different Email for register ";
                Session::put('error_message',$message);
                return redirect()->back();
            }
        $shopName = Vendor::where('shop_name',$data['shop_name'])->count();
            if ($shopName > 0) {
            $message ="Shop name is already exist please try differnt one";
            Session::put('error_message',$message);
            return redirect()->back();
        }
    
        DB::beginTransaction();

            $vendors = new Vendor;
            $vendors->shop_name = $data['shop_name'];
            $vendors->email = $data['email'];
            $vendors->shop_owner = $data['shop_owner'];
            $vendors->vendor_Affiliation = $data['vendor_Affiliation'];
            $vendors->registration_number = $data['registration_number'];
            $vendors->vendor_about = $data['vendor_about'];
            $vendors->established_year = $data['established_year'];
            $vendors->number_of_litters = $data['number_of_litters'];
            $vendors->country = $data['country'];
            $vendors->state = $data['state'];
            $vendors->city = $data['city'];
            $vendors->helth_check = $data['helth_check'];
            $vendors->save();
            $vendor_id = DB::getPdo()->lastInsertId();
                $message ="Please confirm your Email to activate your account!";
                Session::put('success_message',$message);
                    $admins = new Admin;
                    $admins->first_name = $data['first_name'];
                    $admins->last_name = $data['last_name'];
                    $admins->email= $data['email'];
                    $admins->type = 'Vendor';
                    $admins->vendor_id = $vendor_id;
                    $admins->password = Hash::make($request->password);
                    $admins->status = 1;
                    $admins->approved = 0;
                    $admins->save();
                    DB::commit();
                    $message ="Your account is register Plese login Now!";
                    Session::put('success_message',$message);
        
        return redirect()->back();

    }
}























public function newRegister(Request $request)
    {
        // return $request->all();
        if($request->isMethod('post')){
            $data = $request->all();
            $rules = [
                'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'last_name' => 'required',
                'shop_name' => 'required',
                'shop_owner' => 'required',
                'vendor_Affiliation' => 'required',
                'registration_number' => 'required',
                'vendor_about' => 'required',
                'established_year' => 'required',
                'number_of_litters' => 'required',
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
                'helth_check' => 'required',
                'email' => 'required|email|unique:vendors,email',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ];
            $customMessages= [
                'first_name.required' => 'first_name is requires',
                'last_name.alpha' => 'Valid last_name is required',
                'email.email' => 'asad Valid Email is required',
                'password.required' => 'Password is required...',
                'shop_name.required' => 'Shop Name is Required...',
                'shop_owner.required' => 'Shop Owner is Required...',
                'vendor_Affiliation.required' => 'Vendor Affiliation is Required...',
                'registration_number.required' => 'Registration Number is Required...',
                'vendor_about.required' => 'Vendor About is Required...',
                'established_year.required' => 'Established Year is Required...',
                'number_of_litters.required' => 'Number Of Litters is Required...',
                'country.required' => 'Country is Required...',
                'state.required' => 'State is Required...',
                'city.required' => 'City is Required...',
                'helth_check.required' => 'Helth Check is Required...',

            ];
            $this->validate($request,$rules,$customMessages);
            $vendorCount = Admin::where('email',$request->email)->count();
            if($vendorCount > 0 ){
                $message ="This Email id is alread exists use different Email for register ";
                Session::put('error_message',$message);
                return redirect()->back();
            }
            // $shopName = Vendor::where('shop_name',$data['shop_name'])->count();
            //     if ($shopName > 0) {
            //     $message ="Shop name is already exist please try differnt one";
            //     Session::put('error_message',$message);
            //     return redirect()->back();
            // }
        
            // DB::beginTransaction();

                $vendors = new Vendor;
                $vendors->shop_name = $data['shop_name'];
                $vendors->email = $data['email'];
                $vendors->shop_owner = $data['shop_owner'];
                $vendors->vendor_Affiliation = $data['vendor_Affiliation'];
                $vendors->registration_number = $data['registration_number'];
                $vendors->vendor_about = $data['vendor_about'];
                $vendors->established_year = $data['established_year'];
                $vendors->number_of_litters = $data['number_of_litters'];
                $vendors->country = $data['country'];
                $vendors->state = $data['state'];
                $vendors->city = $data['city'];
                $vendors->helth_check = $data['helth_check'];
                $vendors->save();
                $vendor_id = DB::getPdo()->lastInsertId();
                // DB::commit();
                    $message ="Please confirm your Email to activate your account!";
                    Session::put('success_message',$message);
                        $admins = new Admin;
                        $admins->first_name = $data['first_name'];
                        $admins->last_name = $data['last_name'];
                        $admins->email= $data['email'];
                        $admins->type = 'Vendor';
                        $admins->vendor_id = $vendor_id;

                        $admins->password = Hash::make($request->password);
                        $admins->status = 1;
                        $admins->approved = 0;
                        $admins->save();
                        // DB::commit();
                        $message ="Your account is register Plese login Now!";
                        Session::put('success_message',$message);
            
            return redirect()->back();

        }
    }