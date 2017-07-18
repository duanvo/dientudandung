
<!-- Modal Add Cate-->

<div id="adddetaildashModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-detail">
        <div class="content modal_background">
            <div class="panel-title">
                <h3 class="modal_header" align="center">Add Detail</h3>
            </div>

            <form method="POST" class="form-horizontal" role="form"  name="validate_add_detail_dash" id="validate_add_detail_dash" enctype="multipart/form-data">
                <div class="modal-body modal-body-detail">

					<div class="form-group">
						<label class="col-md-1 control-label">Category</label>
						<div class="col-md-10">
							<select name="category_dash" id="category_dash" class="form-control" autofocus >
								<option disabled selected hidden>Please Choose Catgeory...</option>
								<option value="0" class="{{Auth::user()->level==1 ? 'hidden':''}}">Parent Category</option>
							</select>
						</div>
					</div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Type</label>
                        <div class="col-md-10">
                           <select name="dash_type_article" id="dash_type_article" class="form-control" >
                                <option disabled selected hidden>Please Choose Type Of Article...</option>
                                <option value="listening">Listening</option>
                                <option value="reading">Reading</option>
                                <option value="writing">Writing</option>
                           </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Tittle</label>
                        <div class="col-md-10">
                            <textarea type="text" class="form-control" name="dash_tittle"  id="dash_tittle" rows="3"></textarea>
                        </div>
                        <div class="has-error"><i><span class="help-block errorTittle_add_dash"></span></i></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Introduce</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="dash_introduce" id="dash_introduce" rows="3"></textarea>
                        </div>
                    </div>

					<div class="form-group">
						<label class="col-md-1 control-label">Content</label>
						<div class="col-md-10">
							<textarea class="form-control" name="dash_content" id="dash_content" rows="3"></textarea><script type="text/javascript">ckeditor("dash_content", "config", "standard")</script>
						</div>
					</div>
                </div>
                <div class="modal-footer modal-body-footer">
                    <!-- Submit -->
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <button type="submit" id="submit" class="btn_admin primary pull-left">Submit</button>
                            <button type="reset" class="btn_admin warning  pull-left">Reset</button>
                			<button type="button" class="btn_admin danger pull-right" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

