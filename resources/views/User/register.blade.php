@extends('layouts.app')
@section('content')

<div class="container"> 
		<div class="title">Register</div>
			<form action="#" name="form">
				<div class="user-details">
                    <div class="mb-3">
                        <label for="" class="form-label">First name</label>
                        <input type="text" class="form-control" id="" placeholder="First name">
                    </div>
					<div class="mb-3">
                        <label for="" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="" placeholder="Last name">
                    </div>
					<div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" id="" placeholder="Adress Email">
                    </div>
					<div class="mb-3">
                        <label for="" class="form-label">role</label>
                        <input type="text" class="form-control" id="" placeholder="role">
                    </div>
					<div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" id="" placeholder="Password">
                    </div>
					<div class="mb-3">
                        <label for="" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="" placeholder="Confirm Password">
                    </div>
					</div>
					<div class="gender-details">
						<input type="radio" name="gender" value="male" id="dot-1">
						<input type="radio" name="gender" value="female" id="dot-2">
						<span class="gender-title">Genre</span>
						<div class="category">
							<label for="dot-1">
								<span class="dot one"></span>
								<span class="gender">Male</span>
							</label>
                        
							<label for="dot-2">
								<span class="dot two"></span>
								<span class="gender">Female</span>
							</label>
						</div>
					</div>

                    

					<div class="button">
						<input type="submit" value="Register">
					</div>
					
				</div>
			</form>
		</div>