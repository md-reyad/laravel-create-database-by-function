public function createSchema(request $request){

       $table=new CompanyModel();
        $table->company_name=$request->get('company_name');
        $table->keyword=$request->get('keyword');
        $table->save();

        $schemaName=$request->get('keyword');
       

        $data= DB::getSchemaBuilder()
            ->getConnection()
            ->statement("CREATE DATABASE ".$schemaName);

 return redirect('company');

    }
