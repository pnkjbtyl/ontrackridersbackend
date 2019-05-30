<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
   <div class="row">
      <nav class="col-md-3 bg-light">
         <div class="sidebar-sticky">
            <ul class="nav flex-column">
               <li class="nav-item">
                  <a class="nav-link disabled" href="#">
                     <h6 class="lead" >
                        API List
                     </h6>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link disabled" href="#">
                  <b>Account</b>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#login">
                  Login
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#register">
                  Signup
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#refreshtoken">
                  Refreshtoken
                  </a>
               </li>
               <li class="nav-item  mt-2">
                  <a class="nav-link disabled" href="#">
                  <b>User</b>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#fetchuser">
                  Fetch user
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#updateuser">
                  Update user 
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#upload">
                  Upload files 
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#fetchfile">
                  Fetch  file for user
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#profilepic">
                  Set profile pic
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#forgetpassword">
                  Forget Password
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#resetpassword">
                  Reset Password
                  </a>
               </li>
               <li class="nav-item  mt-3">
                  <a class="nav-link disabled" href="#">
                  <b>Vehicle Details</b>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#addvehicle">
                  Add vehicle
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#userid">
                  Get Vehicle By id
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#vehicleid">
                  Get Vehicle By uid
                  </a>
               </li>
                <li class="nav-item">
                  <a class="nav-link" href="#updatevehicle">
                  Update vehicle Details
                  </a>
               </li>
            </ul>
         </div>
      </nav>
        <div class="col-md-9 mt-1" >
        <section id="login" class="col-12">
           <div class="mt-1">
              <h6>End Point for Register Login</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Post</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.6:3000/login</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">content-type</td>
                       <td>
                          application/json
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 28%">Field</th>
                       <th style="width: 20%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">email</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>dipshi110@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">password</td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>..</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
{
    "data": {
        "name": "dipgg",
        "email": "dipshi110@gmail.com",
        "token": "token_value";
        "refreshtoken": "refreshtoken"
    },
    "message": "Login Successfull"
}
			</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Login Successfull</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
        <section id="register" class="col-12">
           <div class="mt-1">
              <h6>End Point for Register Signup</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Post</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.6:3000/signup</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">content-type</td>
                       <td>
                          application/json
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">name</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>dipgg</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">email</td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>dipshi110@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">password</td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>12425121</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
{
    "data": {
        "name": "dipgg",
        "email": "dipshi110@gmail.com",
        "token": "token_value";
        "refreshtoken": "refreshtoken"
    },
    "message": "registered"
}
			</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Registered</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
        <section id="refreshtoken" class="col-12">
           <div class="mt-1">
              <h6>End Point for Refresh token</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.6:3000/refreshtoken</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">refresh-token</td>
                       <td>
	          	String
                       </td>
                       <td>
                        token_value
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
{
    "data": {
        "email": "dipshi110@gmail.com",
        "token": "token_value",
        "refreshSecretKey": "refreshsecretkey"
    },
    "message": "Login Successful"
}		</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>

                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Login Successful</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
          <section id="fetchuser" class="col-12">
           <div class="mt-1">
              <h6>End Point for fetch user by user id</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/users/:uid</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">content-type</td>
                       <td>
                          application/json
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">x-access-code</td>
                       <td>
                         String
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">id</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>user_id</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
{
    "data": {
        "id": 99,
        "name": "dipgg",
        "email": "dipshi110@gmail.com",
        "age": null,
        "dob": null,
        "location": null,
        "driving_licence": null,
        "identification_no": null,
        "gender": null,
        "blood_group": null,
        "marital_status": null,
        "smoke": null,
        "drink": null,
        "spectacles": null,
        "profile_pic_id": null,
        "created_at": "2019-05-23T07:49:14.000Z",
        "updated_at": "2019-05-23T07:49:14.000Z"
    },
    "message": "Success"
}		</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Success</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
         <section id="updateuser" class="col-12">
           <div class="mt-1">
              <h6>End Point for update user</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Put</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.11:3000/users/update</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>	
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">content-type</td>
                       <td>
                          application/json
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">x-access-code</td>
                       <td>
                         String
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">name</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>kau</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">age</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>23</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">dob</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>26/10/1991</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">location</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>ynr126</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">driving_licence</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>2614mtech</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">identification_no</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>55555</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">gender</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>f</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">blood_group</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>AB</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">marital_status</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Single</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">smoke</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>N</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">drink</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>N</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">spectacles</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>N</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">updated_at</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>2019-05-13</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div>
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
{
    "data": {
        "name": "kau",
        "age": "25",
        "dob": "26/10/1991",
        "location": "ynr126",
        "driving_licence": "2614mtech",
        "identification_no": "55555",
        "gender": "f",
        "blood_group": "AB+",
        "marital_status": "Single",
        "smoke": "N",
        "drink": "N",
        "spectacles": "N",
        "updated_at": "2019-05-23T10:44:20.356Z"
    },
    "message": "Successfully updated"
}		</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Successfully updated</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
        <section id="fetchfile" class="col-12">
           <div class="mt-1">
              <h6>End Point to fetch file for user</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.12:3000/users/files</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">x-access-code</td>
                       <td>
                         String
                       </td>
                       <td>
                          <p>token_value</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">id</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>user_id</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
{
    "data": {
        "paged_records": [
            {
                "id": 899,
                "file_name": "pp.png",
                "fs_name": "1558593382963-pp.png"
            },
            {
                "id": 900,
                "file_name": "Rannpri.png",
                "fs_name": "1558593382969-Rannpri.png"
            },
            {
                "id": 901,
                "file_name": "wall.png",
                "fs_name": "1558593382977-wall.png"
            }
        ],
        "offset": 0,
        "total_records": 14
    },
    "message": "3 records fetched out of 14 records"
}		</pre>

                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>3 records fetched out of 14 records</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
        <section id="profilepic" class="col-12">
           <div class="mt-1">
              <h6>End Point to set profile pic</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://http://192.168.1.6:3000/users/setprofilepic/259</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">x-access-code</td>
                       <td>
                         String
                       </td>
                       <td>
                          <p>token_value</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">id</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>user_id</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
{
    "data": {
        "profile_image": [
            {
                "id": 900,
                "user_id": 67,
                "file_name": "Rannpri.png",
                "fs_name": "1558593382969-Rannpri.png",
                "is_deleted": 0,
                "created_at": "2019-05-23 12:06:09",
                "updated_at": "2019-05-23 12:06:09"
            }
        ]
    },
    "image_url": "192.168.1.5:3000/1558593382969-Rannpri.png",
    "message": "Profile photo updated successfully"
}		</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Profile photo updated successfully</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
         <section id="forgetpassword" class="col-12">
           <div class="mt-1">
              <h6>End Point for forget password</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Post</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.3:3000/forget/password</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">content-type</td>
                       <td>
                         application/json
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">email</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>dipshisharma110@gmail.com</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 20%">Type</th>
                       <th style="width: 50%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
     {
    "message": "Email has been sent to
                your registered 
                email use they key to reset the password"
    }		</pre>

                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>"Email has been sent to
                your registered 
                email use they key to reset the password"</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
         <section id="resetpassword" class="col-12">
           <div class="mt-1">
              <h6>End Point for reset password</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Put</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.12:3000/reset/password</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">content-type</td>
                       <td>
                         application/json
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">id</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>user_id</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 20%">Type</th>
                       <th style="width: 50%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
     
{
    "data": {
        "email": "priyankagiri023@gmail.com"
    },
    "message": "Password is reset  successfully"
}		</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>"Password is reset  successfully"</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>

        <section id="addvehicle" class="col-12">
           <div>
              <h6>Endpoint to add vehicle</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Post</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.11:3000/vehicles/add</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">contet-type</td>
                       <td>
                          application/json
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">x-access-code</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>token_value</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
            <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">registration_no</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>1239</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">registrant_name</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Prinka</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">make</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Hero</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">vehicle_type</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>2Wheeler</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">body_type</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Other</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">model</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activa</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">model_year</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>2016</p>
                       </td>
                    </tr>
                     <tr>
                       <td class="code">color</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>black</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">seat_capacity</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>2</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">engine_cc</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>150cc</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">fuel_type</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Petrol</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">interior</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Moderate</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">pets_allowed</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>N</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">music_allowed</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>N</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">smoking_allowed</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>N</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
           <div>
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 50%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
{
    "vehicles": {
        "user_id": 99,
        "registration_no": "1239",
        "registrant_name": "Prinka",
        "make": "Hero",
        "vehicle_type": "2Wheeler",
        "body_type": "Other",
        "model": "Activa",
        "model_year": "2016",
        "color": "black",
        "seat_capacity": "2",
        "engine_cc": "150cc",
        "fuel_type": "Petrol",
        "interior": "Moderate",
        "pets_allowed": "N",
        "music_allowed": "N",
        "smoking_allowed": "N"
    },
    "message": "Vehicle added successfully"
}
			</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Vehicles added successfully</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
        <section id="userid" class="col-12">
           <div>
              <h6>Endpoint to fetch vehicle list by user id</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/vehicles/:uid</span></button>
           </div>
           <div class="mt-1">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">content-type</td>
                       <td>
                          application/json
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 50%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
{
    "data": [
        {
            "id": 23,
            "registration_no": "1239",
            "make": "Hero",
            "model": "Activa",
            "model_year": "2016"
        }
    ],
    "message": "1 Records fetched successfully"
}		</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>One record fetched successfully</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
  
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
        <section id="vehicleid" class="col-12">
           <div>
              <h6>Endpoint to fetch vehicle details by vehicle id</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.11:3000/vehicles/details/:id</button>
           </div>
           <div class="mt-1">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code"x-access-code</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>token_value</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
{
    "data": {
        "id": 23,
        "user_id": 99,
        "registration_no": "1239",
        "registrant_name": "Prinka",
        "vehicle_image_ids": null,
        "make": "Hero",
        "vehicle_type": "2Wheeler",
        "body_type": "Other",
        "model": "Activa",
        "model_year": "2016",
        "color": "black",
        "seat_capacity": "2",
        "engine_cc": "150cc",
        "fuel_type": "Petrol",
        "interior": "Moderate",
        "pets_allowed": "N",
        "music_allowed": "N",
        "smoking_allowed": "N"
    },
    "message": "Record fetched successfully"
}
			</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Record fetched successfully</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section> 
         <section id="vehiclepic" class="col-12">
           <div class="mt-1">
              <h6>End Point to set vehicle pic</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.3:3000/vehicles/setvehiclepic/899</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">content-type</td>
                       <td>
                         application/json
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">id</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>user_id</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 20%">Type</th>
                       <th style="width: 50%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
    {
    "data": {
        "vehicle_image": [
            {
                "id": 899,
                "user_id": 67,
                "file_name": "pp.png",
                "fs_name": "1558593382963-pp.png",
                "is_deleted": 0,
                "created_at": "2019-05-23 12:06:09",
                "updated_at": "2019-05-23 12:06:09"
            }
        ]
    },
    "message": "Photo addded successfully"
}	</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>"Photo addded successfully"</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
         <section id="updatevehicle" class="col-12">
           <div class="mt-1">
              <h6>End Point to update vehicle </h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Put</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.5:3000/vehicles/update/23</span></button>
           </div>
           <div class="mt-3">
              <h6>Header</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">content-type</td>
                       <td>
                         application/json
                       </td>
                       <td>
                          <p>Users unique access-key</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">x-access-code</td>
                       <td>
                         String
                       </td>
                       <td>
                          <p>token-value</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Parameters</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">id</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>user_id</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Response</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 20%">Type</th>
                       <th style="width: 50%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <pre>
    {
    "vehicles": {
        "user_id": 99,
        "registrant_name": "prinka",
        "make": "Hero",
        "vehicle_type": "tra",
        "body_type": "tra",
        "model": "20144",
        "model_year": "2018",
        "color": "black",
        "seat_capacity": "2",
        "engine_cc": "150cc",
        "fuel_type": "2",
        "interior": "2",
        "pets_allowed": "N",
        "music_allowed": "N",
        "smoking_allowed": "N"
    },
    "message": "Vehicle updated successfully"
}	</pre>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Success</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Field</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>"Photo addded successfully"</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
           <div >
              <h6>Error</h6>
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                       <th style="width: 30%">Name</th>
                       <th style="width: 10%">Type</th>
                       <th style="width: 60%">Description</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td class="code">message</td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Validation or error message</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </section>
        </div>
   </div>
</main>

