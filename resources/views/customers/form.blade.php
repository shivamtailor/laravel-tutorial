<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" aria-describedby="nameError" value="{{old('name') ?? $customer->name}}">
    <small id="nameError" class="form-text text-danger">{{ $errors->first('name') }}</small>
</div>
<div class="form-group">
    <label for="name">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="emailError"  value="{{old('email') ?? $customer->email}}">
    <small id="emailError" class="form-text text-danger">{{ $errors->first('email') }}</small>
</div>
<div class="form-group">
    <label for="active">Active {{$customer->active}}</label>
    <select id="active" name="active" class="form-control">
        <option value="" disabled>Status</option>
        @foreach($customer->activeOptions() as $activeOptionKey=>$activeOptionValue)
            <option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected' : ''}}>{{$activeOptionValue}}</option>
        @endforeach
    </select>
    <small id="activeError" class="form-text text-danger">{{ $errors->first('active') }}</small>
</div>
<div class="form-group">
    <label for="active">Company</label>
    <select id="company_id" name="company_id" class="form-control">
        @foreach($companiesList as $company)
            <option value="{{$company->id}}" {{$company->id==$customer->company_id ? 'selected' : ''}}>{{$company->name}}</option>
        @endforeach
    </select>
    <small id="activeError" class="form-text text-danger">{{ $errors->first('active') }}</small>
</div>
@csrf
