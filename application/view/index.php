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
                  <a class="nav-link" href="#profile">
                  Set profile pic
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
            </ul>
         </div>
      </nav>
        <div class="col-md-9 mt-1" >
        <section id="login" class="col-12" >
           <div class="mt-1">
              <h6>End Point for User Login</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Post</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/login</span></button>
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
                       <td class="code">ccwc</td>
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
           <div>
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
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
              <h6>End Point for Register Login</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Post</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/signup</span></button>
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
                       <td class="code">ccwc</td>
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
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
              <button type="button" class="btn btn-sm btn-primary mt-1">Post</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/refreshtoken</span></button>
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
                       <td class="code">ccwc</td>
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
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
              <h6>End Point for fetch user</h6>
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
                       <td class="code">ccwc</td>
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
              <h6>Parameters </h6>
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
                       <tsd>
                       String
                       </td>
                       <td>
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
        <section id="updateuser" class="col-12">
           <div class="mt-1">
              <h6>Endpoint to Update user</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/users/update</span></button>
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
                       <td class="code">ccwc</td>
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
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
        <section id="addvehicle" class="col-12">
           <div>
              <h6>Endpoint to add vehicle</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Post</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/vehicles/add</span></button>
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
                       <td class="code">ccwc</td>
                       <td><
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
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
              <button type="button" class="btn btn-sm btn-primary mt-1">Post</button>
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
                       <td class="code">ccwc</td>
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
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
                          <p>Two records fetched successfully</p>
                       </td>
                    </tr>
                 </tbody>
              </table>
              s
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
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/vehicles/details/:id</button>
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
                       <td class="code">ccwc</td>
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
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
        <section id="upload" class="col-12">
           <div>
              <h6>Endpoint to upload files</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/vehicles/details/:id</button>
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
                       <td class="code">ccwc</td>
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
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
           <div>
              <h5>Error</h5>
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
           <div>
              <h6>fetch file for user</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/vehicles/details/:id</button>
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
                       <td class="code">ccwc</td>
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
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
              <h5>Error</h5>
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
           <div>
              <h6>set profile pic by id</h6>
              <button type="button" class="btn btn-sm btn-primary mt-1">Get</button>
              <button type="button" class="btn btn-dark col-12 mt-1"><span style="float: left">http://192.168.1.15:3000/vehicles/details/:id</button>
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
                       <td class="code">ccwc</td>
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
           <div>
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
                          <p>priyankagiri023@gmail.com</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">isPinned <span class="label label-optional">optional</span></td>
                       <td>
                          Boolean
                       </td>
                       <td>
                          <p>Activity user pin status [true,false]</p>
                       </td>
                    </tr>
                    <tr>
                       <td class="code">action <span class="label label-optional">optional</span></td>
                       <td>
                          String
                       </td>
                       <td>
                          <p>Activity user action status ["invited", "going", "not_interested", "leave"]</p>
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
              <h5>Error</h5>
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

