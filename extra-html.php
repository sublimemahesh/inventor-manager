  
<div class="modal js-loading-bar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="progress progress-popup">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"  ></div>
                </div> 
                <div class="text-center">
                    <img src="public/img/Iridicent word.gif" alt="" /> 
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .progress-bar.animate {
        width: 100%;
    }
</style>

<script>
// Setup
    this.$('.js-loading-bar').modal({
        backdrop: 'static',
        show: false
    });

</script>