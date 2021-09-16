<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-12" style="text-align: center;">
          <img src="images/imgs.jpg" alt="images en tete d'Inscription"> 
        </div> <br>
      </div>
      <div class="row">
        <div class="col-12">
          <form action="traiteinscription.<?php  ?>" method="post">
            <h1>Espace Inscription</h1>
            <div class="table-responsive">
              <table>
                <tr>
                  <td><label for="nom">Nom:</label></td>
                  <td><input type="text" name="nom" id="nom"></td>
                </tr>
                <tr>
                  <td><label for="prenom">Prenom:</label></td>
                  <td><input type="text" name="prenom" id="prenom"></td>
                </tr>
                <tr>
                  <td><label for="daten">Né(e) le:</label></td>
                  <td><input type="date" name="date" id="daten"></td>
                  <td><label for="lieu">Lieu:</label> </td>
                  <td><input type="text" name="lieu" id="lieu"> </td>
                </tr>
                <tr> 
                  <td><label>Statut:</label></td>
                  <td><input type="radio" name="statut" id="statute" value="Etudiant"><label for="statute">Etudiant</label></td>
                  <td><input type="radio" name="statut" id="statutp" value="Profetion"><label for="statutp">Profetion</label></td>

                </tr>
                <tr> 
                  <td><label for="ep">Etudiant ou profetion:</label></td>
                  <td> <input type="text" name="ep" id="ep"></td>
                </tr>
                <tr> 
                  <td><label>Niveau:</label></td>
                  <td><select name="niveau" id="niveau">
                    <option value="L1">L1 </option>
                    <option value="L2">L2 </option>
                    <option value="L3">L3 </option>
                    <option value="M1">M1 </option>
                    <option value="M2">M2 </option>
                  </select></td>
                </tr>
                <tr> 
                  <td><label for="tel"> Tel:</label> </td>
                  <td><input type="text" name="tel" id="tel"> </td>
                  <td><label for="fb">Facebook: </label></td>
                  <td><input type="text" name="fb" id="fb"> </td>
                </tr>
                <tr>
                <td><label for="mail">E-mail:</label> </td> 
                <td><input type="text" name="mail" id="mail" placeholder="exemple@gmail.com"> </td> 

                </tr>
                <tr>
                <td><label for="mp">Mot de passe:</label></td> 
                <td><input type="password" name="mp" id="mp"> </td> 
                </tr>

              </table> <br> 
              <div  style="text-align: center;"> 
              <input type="submit" name="valider" id="valider" value="Valider">
              <input type="reset" name="anuler" id="anuler" value="Anuler">
               </div>
            </div>
          </form>
        </div>
      </div>
    </div>

</body>
</html>