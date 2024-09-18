


 <!-- ====ADD PRODUCT MODAL=== -->
 <div class="modal fade" id="add-product" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
            <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Add Product</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="page-list-product.html" data-toggle="validator">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Select Branch *</label>
                                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                                    <option>Standard</option>
                                                    <option>Combo</option>
                                                    <option>Digital</option>
                                                    <option>Service</option>
                                                </select>
                                            </div> 
                                        </div>  
                                        <div class="col-md-6">                      
                                            <div class="form-group">
                                                <label>Product Name *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name" data-errors="Please Enter Name." required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Code *</label>
                                                <input type="text" class="form-control" placeholder="Enter Code" data-errors="Please Enter Code." required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label>Barcode Symbology *</label>
                                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                                    <option>CREM01</option>
                                                    <option>UM01</option>
                                                    <option>SEM01</option>
                                                    <option>COF01</option>
                                                    <option>FUN01</option>
                                                    <option>DIS01</option>
                                                    <option>NIS01</option>
                                                </select>
                                            </div>
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Category *</label>
                                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                                    <option>Beauty</option>
                                                    <option>Grocery</option>
                                                    <option>Food</option>
                                                    <option>Furniture</option>
                                                    <option>Shoes</option>
                                                    <option>Frames</option>
                                                    <option>Jewellery</option>
                                                </select>
                                            </div>
                                        </div>





                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sub Category *</label>
                                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                                    <option>Beauty</option>
                                                    <option>Grocery</option>
                                                    <option>Food</option>
                                                    <option>Furniture</option>
                                                    <option>Shoes</option>
                                                    <option>Frames</option>
                                                    <option>Jewellery</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Cost *</label>
                                                <input type="text" class="form-control" placeholder="Enter Cost" data-errors="Please Enter Cost." required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Price *</label>
                                                <input type="text" class="form-control" placeholder="Enter Price" data-errors="Please Enter Price." required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tax Method *</label>
                                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                                    <option>Exclusive</option>
                                                    <option>Inclusive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">                                    
                                            <div class="form-group">
                                                <label>Quantity *</label>
                                                <input type="text" class="form-control" placeholder="Enter Quantity" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" class="form-control image-file" name="pic" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description / Product Details</label>
                                                <textarea class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>                            
                                    <button type="submit" class="btn btn-primary mr-2">Add Product</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<!-- ====ADD PRODUCT MODAL=== -->



<div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body">


                  <div class="popup text-left">
                          <h4 class="mb-3">Product  Category</h4>
                          <div class="content create-workform bg-body">
                              <div class="pb-3">
                                  <label class="mb-2">Category Title</label>
                                  <input type="text" class="form-control" placeholder="Enter Category">
                              </div>
                              <div class="col-lg-12 mt-4">
                                  <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                      <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                      <div class="btn btn-outline-primary" data-dismiss="modal">Add New</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                     
                  </div>
              </div>
          </div>
      </div>  
