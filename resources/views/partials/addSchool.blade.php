<div class="modal fade" id="modal-addSchool">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">เพิ่มโรงเรียน</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="frmAddSchool">


                    <div id="add-error-bag" class="alert alert-danger">
                            <ul id="add-task-errors">
                            </ul>
                        </div>
                    <div class="row">
                            <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label  class="col-md-12 col-sm-5 control-label" >ชื่อโรงเรียน:</label>
                          <input id="name_school" type="text" class="form-control"  name="name_school" >
                        </div>
                        </div>
                         <div class="col-12 col-md-4">
                           <div class="form-group">
                                <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">อีเมล:</label>
                                <input id="email" type="email" class="form-control"  name="email">
                            </div>
                         </div>
                         <div class="col-12 col-md-4">
                            <div class="form-group">
                                 <label  class="col-md-12 col-sm-12 control-label">เบอร์โทรศัพท์:</label>
                                <input id="tel" type="text" class="form-control" name="tel" >
                            </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-12 col-md-4">
                                <div class="form-group">
                                     <label  class="col-md-12 col-sm-12 control-label">ที่อยู่:</label>
                                  <textarea name="address" id="" cols="30" rows="2" class="form-control" name="address"></textarea>
                                </div>
                            </div>
                  </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
              <button type="button" class="btn btn-primary" id="btn-addSchool" value="add">บันทึก</button>
            </div>
          </div>
        </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
