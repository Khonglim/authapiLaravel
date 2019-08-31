<div class="modal fade" id="modal-addAdmin">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">เพิ่มผู้ดูแลระบบ/โรงเรียน/แก้ไข</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="frmAddUser">
                <div id="add-error-bag" class="alert alert-danger">
                        <ul id="add-task-errors">
                        </ul>
                    </div>
                <div class="row">
                        <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label  class="col-md-12 col-sm-5 control-label" >ชื่อผู้ใช้:</label>
                      <input id="name" type="text" class="form-control"  name="name" id="name" >
                    </div>
                    </div>
                     <div class="col-12 col-md-4">
                       <div class="form-group">
                            <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">รหัสผ่าน:</label>
                            <input id="password" type="password" class="form-control"  name="password"  id="password">
                        </div>
                     </div>
                     <div class="col-12 col-md-4">
                        <div class="form-group">
                             <label  class="col-md-12 col-sm-12 control-label">ยืนยันรหัสผ่าน:</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                        </div>
                    </div>
              </div>
              <div class="row">
                    <div class="col-12 col-md-4">
                            <div class="form-group">
                                 <label  class="col-md-12 col-sm-12 control-label">ชื่อ-นามสกุล:</label>
                                <input id="password-confirm" type="text" class="form-control" name="name_lastname" id="name_lastname" >
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                                <div class="form-group">
                                     <label  class="col-md-12 col-sm-12 control-label">โรงเรียน:</label>
                                    <input id="password-confirm" type="text" class="form-control" name="school" id="school">
                          </div>
                     </div>
                     <div class="col-12 col-md-4">
                            <div class="form-group">
                                 <label  class="col-md-12 col-sm-12 control-label">สิทธิ์การใช้งาน:</label>
                                 <select class="form-control" name="roles_id_user"  id="roles_id_user">
                                        <option>เลือก</option>
                                        <option value="1" >สิทธิ์ดูแลระบบ i school tec</option>
                                        <option value="2" >สิทธิ์ดูแลโรงเรียน</option>
                                        <option value="3" >สิทธิ์ผู้ปกครอง</option>
                                        <option value="4" >สิทธิ์ครูที่ปรึกษา</option>

                                      </select>
                      </div>
                 </div>


              </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
          <button type="button" class="btn btn-primary" id="btn-addUser" value="add">บันทึก</button>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
