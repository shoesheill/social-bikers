<script src="https://cdn.jotfor.ms/js/vendor/imageinfo.js?v=3.3.14677" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.14677" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
	JotForm.clearFieldOnHide="disable";
	JotForm.onSubmissionError="jumpToFirstError";
   });
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.14677" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.14677" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.14677" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/54a64d6e25d7909c1f8b4567.css?themeRevisionID=572b2f25977cdf98498b4567"/>
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    .form-all{
        width:454px;
        color:rgb(19, 19, 19) !important;
        font-family:'Rambla';
        font-size:16px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }
	body
	{
		margin-left:400px;
	}

</style>

<form class="jotform-form" action="upload.php" method="post" enctype="multipart/form-data" name="form_62355814151452" id="62355814151452" accept-charset="utf-8">
  <input type="hidden" name="formID" value="62355814151452" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header">
              Upload Bikes
            </h1>
            
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> Name </label>
        <div id="cid_4" class="form-input-wide jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_4" name="image_name" required size="20" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> Model </label>
        <div id="cid_9" class="form-input-wide jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_9" name="model" required size="20" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10"> Price </label>
        <div id="cid_10" class="form-input-wide jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_10" name="price"  required size="20" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_14">
        <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14"> Type </label>
        <div id="cid_14" class="form-input-wide jf-required">
          <select class="form-dropdown" style="width:150px" id="input_14" name="type">
            <option value="">  </option>
            <option value="Option 1"> MOUNTAIN </option>
            <option value="Option 2"> ROAD </option>
            <option value="Option 3"> URBAN </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12">
          Brand
          
        </label>
        <div id="cid_12" class="form-input-wide jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" required="required" id="input_12" name="brand" size="20" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_fileupload" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Image Upload </label>
        <div id="cid_7" class="form-input-wide jf-required">
          <input class="form-upload"  type="file" id="input_7" required="required" name="file" data-imagevalidate="yes" file-accept="pdf, doc, docx, xls, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" file-maxsize="10240" file-minsize="0" file-limit="0" />
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"> Description </label>
        <div id="cid_6" class="form-input-wide jf-required">
          <textarea id="input_6" class="form-textarea" name="img_description"  class=" form-textbox validate[required]" requiredcols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button">
              Submit
            </button>
         
      </li>
    </ul>
  </div>
  
</form>
