<div class="text-white alert alert-danger alert-dismissible text-center fadeIn" role="alert" style="background: rgba(255,0,0,0.4)">
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
    </button>
    <h2>
        <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;ERROR</strong>
        <h1>No s'ha pogut completar l'acció</h1>
        <hr>
        <h5>{{\Session::get("error_message")}}</h5>
    </h2>
</div>
