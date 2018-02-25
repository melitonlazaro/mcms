<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require('extensions.php'); ?>
</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-xs-6">
	    	<?php echo form_open('Prms/testing_one') ?>
				<div class="form-group multiple-form-group">
					<label>Multiple inputs</label>

					<div class="form-group input-group">
						<div class="row">
							<div class="col-md-4">
								<input type="hidden" name="particular_id[]">
								<input type="text" name="particular[]" class="form-control">
							</div>
							<div class="col-md-4">
								<input type="text" name="quantity[]" class="form-control">
							</div>
							<div class="col-md-4">
								<input type="text" name="price[]" class="form-control">
							</div>
						</div>
							<span class="input-group-btn"><button type="button" class="btn btn-info btn-add">Add
							</button></span>
					</div>
				</div>
				<button class="btn btn-success" type="submit">Submit</button>
			</form>
	    	</div>        
		</div>
	</div>
	<script>
		(function ($) {
    $(function () {

        var addFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
            var $formGroupClone = $formGroup.clone();

            $(this)
                .toggleClass('btn-default btn-add btn-danger btn-remove')
                .html('–');

            $formGroupClone.find('input').val('');
            $formGroupClone.insertAfter($formGroup);

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', true);
            }
        };

        var removeFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', false);
            }

            $formGroup.remove();
        };

        var countFormGroup = function ($form) {
            return $form.find('.form-group').length;
        };

        $(document).on('click', '.btn-add', addFormGroup);
        $(document).on('click', '.btn-remove', removeFormGroup);

    });
})(jQuery);
	</script>
</body>
</html>