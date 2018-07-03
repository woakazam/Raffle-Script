<?php require ('header.php'); ?>

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h3 class="main-title">HIZLI ÇEKİLİŞ YAP</h3>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="select-range">Kaç Kişi <u>ASIL</u> Seçilecek ?</label>
                        <select class="form-control" id="select-range-1">
                        <?php
                            for ($i = 1; $i <= 50; $i++){
                        ?>

                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                        
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="select-range">Kaç Kişi <u>YEDEK</u> Seçilecek ?</label>
                        <select class="form-control" id="select-range-2">
                        <?php
                            for ($i = 0; $i <= 50; $i++){
                        ?>

                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                        
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="input-list">Çekiliş Listesi</label>
                        <textarea class="form-control" id="input-list" rows="10" placeholder="* Her Satır 1 Kişiyi Temsil Etmektedir !"></textarea>
                    </div>
                </div>
                <div class="col-12">                    
                    <button class="btn btn-primary float-right" id="btn-draw">Çekiliş Yap</button>
                    <button class="btn btn-primary float-right mr-3" id="btn-load">Listeden Yükle</button>
                </div>
            </div>
            <div class="row row-prin mt-3 d-none">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">ASIL Kazanan Listesi</div>
                        <div class="card-body">
                            <div class="badge-prin-list"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-repl mt-3 d-none">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">YEDEK Kazanan Listesi</div>
                        <div class="card-body">
                            <div class="badge-repl-list"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require ('footer.php'); ?>