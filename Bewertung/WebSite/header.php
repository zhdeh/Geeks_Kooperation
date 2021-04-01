<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css
">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style> .star{
    color: orange;
}
</style>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('table').DataTable();
        });
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>4 Geeks</title>

</head>

<body>

    <!--startpage-->



    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" target="_blank" href="http://intocode.de">intocode</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./google.php">google</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./klinik.php" tabindex="-1" aria-disabled="true">klinik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./dataanalysis.php" tabindex="-1" aria-disabled="true">dataanalysis</a>
                    </li>
                </ul>
                <form id='tohidsform' action="./1.php" method="post">
                    <span>Kliniksuche</span>
<!--form 

                    <span>
                        <label for="fac">Nur Kliniken mit Fachbereich</label>
                        <select name="" id="fac">
                            <option value="klinik.php">alle&nbsp;Fachbereiche</option>
                            <option value="augen.php" selected="">Augen</option>
                            <option value="chiru.php">Chirurgie</option>
                            <option value="gefchi.php">&nbsp;&nbsp;Gefäßchirurgie</option>
                            <option value="hanchi.php">&nbsp;&nbsp;Handchirurgie</option>
                            <option value="kinchi.php">&nbsp;&nbsp;Kinderchirurgie</option>
                            <option value="neuchi.php">&nbsp;&nbsp;Neurochirurgie</option>
                            <option value="plachi.php">&nbsp;&nbsp;Plastische&nbsp;Chirurgie</option>
                            <option value="thochi.php">&nbsp;&nbsp;Thoraxchirurgie</option>
                            <option value="unfchi.php">&nbsp;&nbsp;Unfallchirurgie</option>
                            <option value="diabet.php">Diabetes</option>
                            <option value="frauen.php">Frauen</option>
                            <option value="entbin.php">&nbsp;&nbsp;Entbindung</option>
                            <option value="gastro.php">Gastrologie</option>
                            <option value="geriat.php">Geriatrie</option>
                            <option value="hno.php">Hals-Nasen-Ohren</option>
                            <option value="haemat.php">Hämatologie</option>
                            <option value="hautug.php">Haut/Geschl-Heilkunde</option>
                            <option value="innere.php">Innere</option>
                            <option value="kardio.php">Kardiologie</option>
                            <option value="kinder.php">Kindermedizin</option>
                            <option value="kinpsy.php">Kind/Jugend-Psych.</option>
                            <option value="lungen.php">Lungenheilkunde</option>
                            <option value="munkie.php">Mund/Kiefer-Chirurgie</option>
                            <option value="neuro.php">Neurologie</option>
                            <option value="nephro.php">Nephrologie</option>
                            <option value="nukle.php">Nuklearmedizin</option>
                            <option value="onkolo.php">Onkologie</option>
                            <option value="ortho.php">Orthopädie</option>
                            <option value="psycho.php">Psychiatrie</option>
                            <option value="psysom.php">Psychosomatik</option>
                            <option value="rheuma.php">Rheuma</option>
                            <option value="schmer.php">Schmerztherapie</option>
                            <option value="schlaf.php">Schlafmedizin</option>
                            <option value="sucht.php">Suchttherapie</option>
                            <option value="strahl.php">Strahlentherapie</option>
                            <option value="uro.php">Urologie</option>
                        </select>
                    </span>
--form1---->
                    <span>
                        <label for="fac">name der klinik</label>
                        <select name="" id="fac">
                            <option value="./1.php" selected="">Augenklinik Dr.Hoffmann</option>
                            <option value="./2.php" >Krankenhaus Marienstift Braunschweig</option>
                            <option value="./3.php">Herzogin Elisabeth Hospital Braunschweit</option>
                            <option value="./4.php">Asklepios Fachklinikum Göttingen</option>
                            <option value="./5.php">Asklepios Fachklinikum Tiefenbrunn</option>
                            <option value="./6.php">Friederikenstift Hannover</option>
                            <option value="./7.php">Annastift Hannover</option>
                            <option value="./klinik.php">Clementinenhaus</option>
                            <option value="./klinik.php">Sophienklinik Hannover</option>
                            <option value="./klinik.php">KRH Klinikum Großburgwedel</option>
                            <option value="./klinik.php">KRH Klinikum Lehrte</option>
                            <option value="./klinik.php">Krankenhaus Lindenbrunn</option>
                            <option value="./klinik.php">Krankenhaus Hameln</option>
                            <option value="./klinik.php">AMEOS Klinikum Alfeld</option>
                            <option value="./klinik.php">Helios Klinikum Hildesheim</option>
                            <option value="./16.php">Helios Klinikum Cuxhaven</option>
                            
                        </select>
                    </span>
                    <span>
                        <input id="search-submit" class='btn btn-outline-primary' type="submit" title="Kliniken anzeigen">
                    </span>
                </form>
            </div>
        </div>
    </nav>

    <script>
        $('select').on('change', function() {
            var action = this.value;
            $('#tohidsform').attr('action', action);
        });
    </script>