<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@next"></script>

    <title>crud vuejs</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <style type="text/css">
        #overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
        }
    </style>
</head>

<body>

    <div id="conditional-rendering">
        <div class="container-fluid">
            <div class="row-lg-12">
                <p class="text-center text-dark display-4 pt-2" style="font-size: 25px;">
                    CRUD Application
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row mt-3 ">
                    <div class="col-lg-6">
                        <h3 class="text-info">
                            Registered users
                        </h3>
                        <div>

                            <div class="col-lg-6">
                                <button class="btn btn-info float-right" @click="showAddModal=true">
                                    <i class="fas fa-user"></i>
                                    Add new user
                                </button>
                            </div>

                        </div>

                        <hr class="bg-info mt-3 ">

                        <div class="alert alert-danger" v-if="errorMsg">
                            {{ errorMsg}}
                        </div>

                        <div class="alert alert-success" v-if="successMsg">
                            {{ successMsg}}
                        </div>
                    </div>
                </div>

                        <!--displaying records-->
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <td>ID</td>
                                            <td>Name</td>
                                            <td>
                                                Email
                                            </td>

                                            <td>
                                                Phone
                                            </td>

                                            <td>
                                                Edit
                                            </td>

                                            <td>
                                                Delete
                                            </td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="class-center">
                                            <td>
                                                1
                                            </td>

                                            <td>
                                                Wolfmania
                                            </td>

                                            <td>
                                                Wolf@gmail.com
                                            </td>

                                            <td>
                                                4587555557
                                            </td>

                                            <td>
                                                <a href="" class="text-success"
                                                @click="showEditModal=true">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="" class="text-danger"
                                                    @click="showDeleteModal=true">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="class-center">
                                            <td>
                                                2
                                            </td>

                                            <td>
                                                Wolfmania
                                            </td>

                                            <td>
                                                Wolf@gmail.com
                                            </td>

                                            <td>
                                                4587555557
                                            </td>

                                            <td>
                                                <a href="" class="text-success"
                                                @click="showEditModal=true">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="" class="text-danger"
                                                    @click="showDeleteModal=true">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="class-center">
                                            <td>
                                                3
                                            </td>

                                            <td>
                                                Wolfmania
                                            </td>

                                            <td>
                                                Wolf@gmail.com
                                            </td>

                                            <td>
                                                4587555557
                                            </td>

                                            <td>
                                                <a href="" class="text-success"
                                                @click="showEditModal=true">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="" class="text-danger"
                                                    @click="showDeleteModal=true">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--add-new user -->
                        <div id="overlay" v-if="showAddModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            Add New user
                                        </h5>
                                        <button type="button" class="close" @click="showAddModal=false">
                                            <span aria-hidden="true">
                                                &times;
                                            </span>
                                        </button>
                                    </div>

                                    <div class="modal-body p-4">
                                        <form action="#" method="POST">
                                            <div class="form-group mt-3">
                                                <input type="text" name="name" class="form-control-lg" placeholder="Name">
                                            </div>

                                            <div class="form-group mt-3">
                                                <input type="tel" name="phone" class="form-control-lg" placeholder="Phone">
                                            </div>

                                            <div class="form-group mt-3">
                                                <input type="email" name="email" class="form-control-lg"
                                                    placeholder="Email">
                                            </div>

                                            <div class="form-group mt-3">
                                                <button class="btn btn-info btn-block btn-lg " @click="showAddModal=false">
                                                    Add user
                                                </button>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--edit-new user -->
                        <div id="overlay" v-if="showEditModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                           Edit user
                                        </h5>
                                        <button type="button" class="close" @click="showEditModal=false">
                                            <span aria-hidden="true">
                                                &times;
                                            </span>
                                        </button>
                                    </div>

                                    <div class="modal-body p-4">
                                        <form action="#" method="POST">
                                            <div class="form-group mt-3">
                                                <input type="text" name="name" class="form-control-lg" placeholder="Name">
                                            </div>

                                            <div class="form-group mt-3">
                                                <input type="tel" name="phone" class="form-control-lg" placeholder="Phone">
                                            </div>

                                            <div class="form-group mt-3">
                                                <input type="email" name="email" class="form-control-lg"
                                                    placeholder="Email">
                                            </div>

                                            <div class="form-group mt-3">
                                                <button class="btn btn-info btn-block btn-lg " @click="showEditModal=false">
                                                    Update user
                                                </button>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <!--delete user -->
                          <div id="overlay" v-if="showDeleteModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                           Delete user
                                        </h5>
                                        <button type="button" class="close" @click="showDeleteModal=false">
                                            <span aria-hidden="true">
                                                &times;
                                            </span>
                                        </button>
                                    </div>

                                    <div class="modal-body p-4">
                                        <h4 class="text-danger">
                                            Are you sure ?
                                        </h4>

                                        <h5>
                                            You are deleting 'wolf'
                                        </h5>

                                            <div class="form-group mt-3">
                                                <button class="btn btn-danger  btn-lg " @click="showDeleteModal=false">
                                                   Yes
                                                </button>

                                                <button class="btn btn-success btn-lg mx-2" @click="showDeleteModal=false"> 
                                                    No
                                                 </button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
                <script>
                    const ConditionalRendering = Vue.createApp({
                        data(){
                            return{
                                errorMsg: "",
                                successMsg: "",
                                showAddModal: false,
                                showEditModal: false,
                                showDeleteModal: false,
                                users: [],
                                newUser: { name: "", email:"", phone: ""},
                                currentUser: {}
                            },

                            methods: {
                                    getAllUsers(){
                                        axios.get("http://localhost/crudvuejs/process.php?action=read").then(function(response){
                                            if(response.data.error){

                                            }
                                        })
                                    }
                            }
                        }
                    });

                    ConditionalRendering.mount('#conditional-rendering')

                </script>
                
</body>

</html>