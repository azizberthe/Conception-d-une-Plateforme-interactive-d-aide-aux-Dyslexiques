<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>inscription</title>
</head>
<body>
    <div class="div">
       
        <div class="cont container">
            
            <form class="row col-8 offset-2 reg"  method="POST" action="ajoutEtudiant.php" >
                <div class="col-3">
                    <img src="student.png" width="200px"/>
                </div>
                <div class="col-9">
                    <div class="row form-group">
                        <div class="col-6"><input type="text" class="form control-form" name="nom" id="nom" required /></div>
                        <div class="col-6"><label for="nom" class="label control-label">: الإســم</label></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6 text-center">
                            <input type="radio" class="form control-form" name="sexe" id="sexe" value="Garcon" />
                            <label> :<img src="garçon.png" width="100px" > ذكر</label><br>
                            <input type="radio" class="form control-form" name="sexe" id="sexe" value="Fille" />
                            <label> :<img src="fille.png" width="100px" >  أنثى</label>
                        </div>
                        <div class="col-6"><label for="sex" class="label control-label">: الجــنس</label></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6"><input type="date" class="form control-form" name="date" id="date" required /></div>
                        <div class="col-6"><label for="date" class="label control-label">: تاريخ الإزدياد</label></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6"><input type="gmail" class="form control-form" name="gmail" id="gmail" required /></div>
                        <div class="col-6"><label for="gmail" class="label control-label">: البريد الإلكتروني للأب أو الأم</label></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6"><input type="text" class="form control-form" name="pwd" id="pwd" required /></div>
                        <div class="col-6"><label for="pwd" class="label control-label"> :كلمة السر</label></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6"><input type="text" class="form control-form" name="pwd" id="pwd" required /></div>
                        <div class="col-6"><label for="pwd" class="label control-label"> :تكرار كلمة السر</label></div>
                    </div>
                    <div class="row offset-2 form-group">
                        <div class="col p-3"><button type="submit" class="button" >تسجــيل</button></div>
                    </div>
                </div>
            </form>
        </div>  
    </div>
    <div>
        <button type="button" class="botn" value="<img width='80' src='ico5.png'>">خروج</button>
        <button type="button" class="botn" value="<img width='80' src='ico5.png'>">تسجيل</button>
    </div>
    
    
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

