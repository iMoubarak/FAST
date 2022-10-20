<!DOCTYPE html>
<html lang="Fr">
    <head>
        <title>page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" href="site1.css">
    </head>
    <body>
        <nav>
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="open"></i>   
                <i class="fas fa-times" id="close"></i>    
            </label>
            <a class="logo" href="#"><span class="org">.F</span><span class="blanc">AS</span><span class="vert">T</span></a>
            <ul class="nav_ul">
                <li><a href="#">Université</a></li>
                <li><a href="#">Visiteurs</a></li>
                <li><a href="#">Section</a></li>
                <li><a href="#">Contact</a></li>
                <li class="li_but"><a href="#appli" class="but1">Connexion</a></li>
                <li class="li_but"><a href="#appli_p" class="but2" >S'inscrire?</a></li>
            </ul>
            
        </nav>
       
        <!--------------------------------------------------->
        <div id="appli" class="fenetre">
            <div class="fenetre_content">
                <fieldset class="field_set">
                    <form>
                      <h2 class="field_title">Connectez-vous!</h2>
                      <hr><br><br>
                      <table>
                        <tr>
                         <td>Email: </td><td><input type="email" class="i_put" name="user_name" placeholder="xyz@gmail.com"><br><br></td>
                        </tr>
                        <tr>
                         <td>Mot de passe: </td><td><input type="password" class="i_put" name="user_pass" placeholder=""><br><br></td>
                        </tr>
                        <tr>
                         <td>Confirmez: </td><td><input type="password" class="i_put" name="user_passc" placeholder=""><br><br></td>
                        </tr>
                        <tr>
                         <td colspan="2"><input type="submit" class="i_put" id="sub" valuer="Connexion"></td>
                        </tr>
                  
                      </table>
                      
                    </form>
                  </fieldset>
            </div>
            <a href="#" class="fenetre_close">&times;</a>
        </div>
        <div id="appli_p" class="fenetre1">
            <div class="fenetre_content1">
                <fieldset class="field_set1">
                    <form>
                      <h2 class="field_title">Inscrivez-vous !</h2>
                      <hr><br><br>
                      <table>
                        <tr>
                            <td>Nom: </td><td><input type="text" class="i_put" name="user_name1"><br><br></td>
                        </tr>
                        <tr>
                            <td>Prénom: </td><td><input type="text" class="i_put" name="user_pname"><br><br></td>
                        </tr>
                        <tr>
                         <td>Email: </td><td><input type="email" class="i_put" name="user_email" placeholder="xyz@gmail.com"><br><br></td>
                        </tr>
                        <tr>
                            <td>Tel: </td><td><input type="tel" class="i_put" name="user_number" placeholder="(+227)"><br><br></td>
                        </tr>
                        <tr>
                            <td>Matricule: </td><td><input type="text" class="i_put" name="user_matricule"><br><br></td>
                        </tr>
                        <tr>
                         <td>Mot de passe: </td><td><input type="password" class="i_put" name="user_pass"><br><br></td>
                        </tr>
                        <tr>
                         <td>Confirmez: </td><td><input type="password" class="i_put" name="user_passc"><br><br></td>
                        </tr>
                        <tr>
                        <td><input type="checkbox"></td><td>Acceptiez-vous le contrat de license</td>
                        </tr>
                        <tr>
                         <td colspan="2"><input type="submit" class="i_put" id="sub" value="Inscription"></td>
                        </tr>
                        
                  
                      </table>
                      
                    </form>
                  </fieldset>
            </div>
            <a href="#" class="fenetre_close1">&times;</a>
        </div>
       <!---------------------------1------------------------>
    <footer>
        <div class="footer-wraper">
            <div class="single-footer">
                <h2>Ce Site Web</h2>
                <p>
                    
                    develloper pour avoir une notion de la fast en générale
                     
                </p>
            </div>
            <div class="single-footer">
                <h2 class="h2-footer">Navigation</h2>
                <ul class="footer_ul">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="Apropos.html">A propos</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>
            </div>
            <div class="single-footer">
                <h2 class="h2-footer">Obtenez De L'aide</h2>
                <ul class="footer_ul">
                    <li><a href="#">Actualité</a></li>
                    <li><a href="#">Conditions</a></li>
                </ul>
            </div>
        </div>
   
 </body>
</html>
