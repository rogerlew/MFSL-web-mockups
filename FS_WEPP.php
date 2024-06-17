<!DOCTYPE html>

<head>
    <link href="/mfsl/style.css" type="text/css" rel="stylesheet">
    <title>FS WEPP</title>
</head>

<body>
    <div class="content">
        <header>
            <a href="https://www.fs.fed.us/rmrs/" alt="Moscow Forestry Sciences Laboratory"><img
                    src="/mfsl/images/logo_rmrs_tan_bkgd.gif" /></a>
            <div>
                <h1>FS WEPP</h1>
            </div>
        </header>
        <?php include("content/navbar.php"); ?>
        <main class="fswepp">
            <div class="page-content">
                <div class="item">
                    <div class="grid">
                        <div class="image">
                            <img src="/mfsl/images/fswepp_road4.gif" />
                        </div>
                        <div class="description">
                            <h4>WEPP: Road</h4>
                            Predict erosion from insloped or outsloped forest roads.
                        </div>
                        <div class="run">
                            <a class="button" href="https://forest.moscowfsl.wsu.edu/cgi-bin/fswepp/wr/wepproad.pl">
                                Run
                            </a>
                            <a class="button" href="https://forest.moscowfsl.wsu.edu/cgi-bin/fswepp/wr/wepproadbat.pl">
                                Run Batch
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid">
                        <div class="image">
                            <img src="/mfsl/images/fswepp_ermit.gif" />
                        </div>
                        <div class="description">
                            <h4>Ermit</h4>
                            Predict sediment delivery from the base of a hillslope for five years following a wildfire.
                        </div>
                        <div class="run">
                            <a class="button" href="https://forest.moscowfsl.wsu.edu/cgi-bin/fswepp/ermit/ermit.pl">
                                Run
                            </a>
                            <a class="button" href="https://forest.moscowfsl.wsu.edu/fswepp/batch/bERMiT.html">
                                Batch Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid">
                        <div class="image">
                            <img src="/mfsl/images/fswepp_disturb.gif" />
                        </div>
                        <div class="description">
                            <h4>Disturbed WEPP</h4>
                            Predict erosion from rangeland, forestland, and forest skid trails.
                        </div>
                        <div class="run">
                            <a class="button" href="https://forest.moscowfsl.wsu.edu/cgi-bin/fswepp/wd/weppdist.pl">
                                Run
                            </a>
                            <a class="button" href="https://forest.moscowfsl.wsu.edu/fswepp/batch/dWb.html">
                                Batch download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid">
                        <div class="image">
                            <img src="/mfsl/images/fswepp_fume.jpg" />
                        </div>
                        <div class="description">
                            <h4>FuME (Fuel Management)</h4>
                            Predict soil erosion associated with fule management practices.
                        </div>
                        <div class="run">
                            <a class="button" href="https://forest.moscowfsl.wsu.edu/cgi-bin/fswepp/fume/fume.pl">
                                Run
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid">
                        <div class="image">
                            <img src="/mfsl/images/fswepp_climate2_r.gif" />
                        </div>
                        <div class="description">
                            <h4>Rocky Mountain Climate Generator</h4>
                            Create and download a WEPP climate file.
                        </div>
                        <div class="run">
                            <a class="button" href="https://forest.moscowfsl.wsu.edu/cgi-bin/fswepp/rc/rockclim.pl">
                                Run
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid">
                        <div class="image">
                            <img src="/mfsl/images/fswepp_WEPPcloudLogo.png" />
                        </div>
                        <div class="description">
                            <h4>WEPPcloud</h4>
                            Run WEPP on the cloud.
                        </div>
                        <div class="run">
                            <a class="button" href="https://wepp1.nkn.uidaho.edu/weppcloud/">
                                Watershed Delineation
                            </a>
                            <a class="button" href="https://wepp1.nkn.uidaho.edu/weppcloud/#pep">
                                Postfire Erosion Prediction
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid">
                        <div class="image">
                            <img src="/mfsl/images/fswepp_QWEPPlogo.png" />
                        </div>
                        <div class="description">
                            <h4>QWEPP</h4>
                            Instructions for modeling with QWEPP
                        </div>
                        <div class="run">
                            <a class="button" href="/mfsl/downloads/RRED_user_manual_for_QGIS.pdf" target="_blank">
                                Open
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid">
                        <div class="image">
                            <img src="/mfsl/images/fswepp_peakflow.jpg" />
                        </div>
                        <div class="description">
                            <h4>Peak Flow Calculator</h4>
                            Estimate peak flow for burned areas using Curve Number technology.
                        </div>
                        <div class="run">
                            <a class="button" href="https://forest.moscowfsl.wsu.edu/fswepp/ermit/peakflow/">
                                Run
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php include("content/footer.php"); ?>
        </footer>
    </div>
</body>