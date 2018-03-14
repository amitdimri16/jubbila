<link type="text/css" rel="stylesheet" href="/jubbila/assets/css/sa-add-product.css">
    <link rel="stylesheet" href="/jubbila/assets/css/tags.css">
<script type="text/javascript" src="/jubbila/ckeditor/ckeditor.js"></script>
<link href="fine-uploader/fine-uploader-gallery.min.css" rel="stylesheet">
<script src="/jubbila/fine-uploader/fine-uploader.core.min.js"></script>

<div id="info-wrapper">
    <p class="page-title">Add Product <span><a class="btn-title btn waves-effect waves-light blue" href="#all-products">All Products</a></span></p>
    <div id="container">

        <div class="row form-wrapper">
            <!-- <p class="form-title">Add New Product</p> -->
            
            <form class="formValidate add-product-form" id="formValidate" method="post" action="/jubbila/store-admin/scripts/add-product-script.php" enctype="multipart/form-data">
            <!-- <div class="input-field col s12">
                    <label for="uname">Username</label>
                    <input id="uname" name="uname" type="text" data-error=".errorTxt1">
                    <div class="errorTxt1"></div>
            </div> -->

                <div class="row">
                    <div class="input-field col s12">
                        <label for="pname">Product Name</label>
                        <input id="pname" name="pname" type="text" data-error=".errorTxt1">
                        <div class="errorTxt1"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="pcompany">Product Parent Company (Optional)</label>
                        <input id="pcompany" name="pcompany" type="text" data-error=".errorTxt2">
                        <div class="errorTxt2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <!-- <label for="category">Product Category </label> -->
                        <select class="error browser-default" id="category" name="category" data-error=".errorTxt3">
                            <option value="" disabled selected>--Choose Product Category--</option>
                            <option value="101">Apparel and Footware</option>
                            <option value="102">Automotive</option>
                            <option value="103">Books</option>
                            <option value="104">Electronic Appliances</option>
                            <option value="105">Grocery</option>
                            <option value="106">Kitchenware</option>
                            <option value="107">Services</option>
                            <option value="108">Stationary</option>
                            <option value="109">Tools and Hardware</option>
                            <option value="110">Toys and Games</option>
                        </select>  
                        <div class="errorTxt3"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="pdetail" name="pdetail" class="materialize-textarea validate" data-error=".errorTxt4"></textarea>
                        <label for="pdetail">Product Description (Optional) </label>
                        <div class="errorTxt4"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <!-- <input type="file" id="input-file-events" class="dropify-event" name="pimage"> -->
                        <input type="file" name="pimage" id="pimage">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <label for="price">Product Price </label>
                      <input id="price" type="number" name="price" data-error=".errorTxt5" min="1">
                      <div class="errorTxt5"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="stock">Product In Stock </label><br>
                        <p><input name="instock" id="instock-yes" type="radio" checked="checked"><label for="instock-yes">Yes</label></p>
                        <p><input name="instock" id="instock-no" type="radio"><label for="instock-no">No</label></p>
                        <div class="errorTxt6"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <span class="col s3 delivery-title-text">Product Tags : </span>
                      <input id="tags" type="text" name="tags" data-error=".errorTxt7" min="1">
                      <div class="errorTxt7"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light blue right submit" type="submit" name="insertProduct">
                          <!-- <i class="fa fa-plus" aria-hidden="true"></i> --> Add
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="/jubbila/assets/plugins/jquery-validation-1.16.0/dist/jquery.validate.js"></script>
<script type="text/javascript" src="/jubbila/assets/plugins/tags.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tags').tags({
            unique: true
        });
    });
</script>
<script>
    $(document).ready(function(){
        // Used events ADD PRODUCTS
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element){
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element){
            alert('File deleted');
        });


        //validate
        $("#formValidate").validate({
            rules: {
                pname: {
                    required: true
                },

                category: {
                    required: true
                },
                price: {
                    required: true,
                    minlength: 1
                },
                instock:{
                    required: true,
                }
            },
            //For custom messages
            messages: {
                pname:{
                    required: "Enter the product name"
                },
                category: {
                    required: "Choose the category"
                },
                price: {
                    required: "Write the product price"
                },
                instock: {
                    required: "Write the stock quantity"
                }
            },
            errorElement : 'div',
            errorPlacement: function(error, element) {
              var placement = $(element).data('error');
              if (placement) {
                $(placement).append(error)
              } else {
                error.insertAfter(element);
              }
            }
         });

        
    });
</script>
<!-- <script type="text/javascript">
    CKEDITOR.replace( 'pdetail' );
</script> -->

<script>  
 $(document).ready(function(){  
      $('#insertProduct').click(function(){  
           var image_name = $('#pimage').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#pimage').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#pimage').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  






<!-- 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
 -->                <!-- <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>   -->
                <!-- </table>  
           </div>  
      </body>  
 </html>   -->
<!--  <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>   -->