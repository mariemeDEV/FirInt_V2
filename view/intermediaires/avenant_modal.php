<section class='modal avenant'>
    <span class="close">&times;</span>
    <section class='modal-content animated zoomIn animation-delay-100' style='height:56% !important;margin-left: 32%;width: 42%'>
    <!--h3>Faire un avenant</h3-->
    <form method='POST' action='../../forInt_v2/controllers/PoliceController.php?action=avenant'  id="avenant-form" style='margin-top:45px'>
      <div class="row" style='padding-bottom: 11px !important;'>
      <label for="prenom">Immatriculation<span class="require-caracter">*</span></label>
        <input type="text" id="inputStandard" class="form-control" name='immatriculation_vehicule' required>
        <input type="hidden" name='avenant'>
      </div>
      <div class="row">
        <label for="Type d'avenant">Type d'avenant<span class="require-caracter">*</span></label>
        <select class="form-control type_av" name="type_avenant" required>
          <option value="Type d'avenant" selected disabled>Type d'avenant</option>
          <option value="1">Avenant de Renouvellement</option>
          <option value="2">Avenant changement de Nom</option>
          <option value="3">Avenant de changement d'Immatriculation</option>
        </select>
      </div>
      <div class="row">
        <button type="submit" class="btn btn-gradient dark btn-block" style='width: 20%!important;margin: auto!important;position: relative;top: 25px;background:#11243a;color: #d19e4f'>Valider</button>
      </div>
    </form>
    </section>
  </section>
