<div class="row">
    <div class="form-group col-lg-12 ">
        <label>{{ 'Name' }}</label>
        <input class="form-control form-control-sm" name="name" type="text" value="{{ isset($staff->name) ? $staff->name : ''}}" > 
    </div>
    <div class="form-group col-lg-12 ">
        <label>{{ 'Age' }}</label>
        <input class="form-control form-control-sm" name="age" type="text" value="{{ isset($staff->age) ? $staff->age : ''}}" >    
    </div>
    <div class="form-group col-lg-12 ">
        <label>{{ 'Salary' }}</label>
        <input class="form-control form-control-sm" name="salary" type="number" value="{{ isset($staff->salary) ? $staff->salary : ''}}" >    
    </div>
    <div class="form-group col-lg-12 ">
        <label>{{ 'Phone' }}</label>
        <input class="form-control form-control-sm" name="phone" type="text" value="{{ isset($staff->phone) ? $staff->phone : ''}}" >    
    </div>
</div>
