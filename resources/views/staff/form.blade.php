<div class="row">
    <div class="form-group col-lg-6 ">
        <label>{{ 'name' }}</label>
        <input class="form-control form-control-sm" name="name" type="text" value="{{ isset($staffs->name) ? $staffs->name : ''}}" > 
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'age' }}</label>
        <input class="form-control form-control-sm" name="age" type="text" value="{{ isset($staffs->age) ? $staffs->age : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'salary' }}</label>
        <input class="form-control form-control-sm" name="salary" type="text" value="{{ isset($staffs->salary) ? $staffs->salary : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'phone' }}</label>
        <input class="form-control form-control-sm" name="phone" type="text" value="{{ isset($staffs->phone) ? $staffs->phone : ''}}" >    
    </div>
    

</div>
