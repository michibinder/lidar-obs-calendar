# lidar-obs-calendar
PHP calendar for ground-based Rayleigh lidar measurements


<div class="btn-group btn-group-toggle pagination-centered" data-toggle="buttons">
                        <a href="?ym=<?= $ym; ?>&index=<?= $i_plot; ?>&nm_state=<?= $nm_state; ?>&content=0" class="btn btn-secondary btn-dark <?php if ($content==0) {echo 'active';} else {echo '';} ?>">
                        Temperature
                        </a>
                    <label class="btn btn-secondary btn-dark <?php if ($content==1) {echo 'active';} else {echo '';} ?>">
                        <input type="radio" name="options" id="option2" autocomplete="off"> 
                        <a href="?ym=<?= $ym; ?>&index=<?= $i_plot; ?>&nm_state=<?= $nm_state; ?>&content=1">
                        T' (vertical BWF)
                        </a>
                    </label>
                    <label class="btn btn-secondary btn-dark <?php if ($content==2) {echo 'active';} else {echo '';} ?>">
                        <input type="radio" name="options" id="option3" autocomplete="off"> 
                        <a href="?ym=<?= $ym; ?>&index=<?= $i_plot; ?>&nm_state=<?= $nm_state; ?>&content=2">
                        T' (temporal mean)
                        </a>
                    </label>
                    <label class="btn btn-secondary btn-dark <?php if ($content==3) {echo 'active';} else {echo '';} ?>">
                        <input type="radio" name="options" id="option3" autocomplete="off"> 
                        <a href="?ym=<?= $ym; ?>&index=<?= $i_plot; ?>&nm_state=<?= $nm_state; ?>&content=3">
                        Backscatter
                        </a>
                    </label>
                    <label class="btn btn-secondary btn-dark <?php if ($content==4) {echo 'active';} else {echo '';} ?>">
                        <input type="radio" name="options" id="option3" autocomplete="off"> 
                        <a href="?ym=<?= $ym; ?>&index=<?= $i_plot; ?>&nm_state=<?= $nm_state; ?>&content=4">
                        ERA5 (preview)
                        </a>
                    </label>
                    <label class="btn btn-secondary btn-dark <?php if ($content==5) {echo 'active';} else {echo '';} ?>">
                        <input type="radio" name="options" id="option3" autocomplete="off"> 
                        <a href="?ym=<?= $ym; ?>&index=<?= $i_plot; ?>&nm_state=<?= $nm_state; ?>&content=4">
                        ERA5 (profiles)
                        </a>
                    </label>
                </div>