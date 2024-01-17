<style>
    .nav-link{
        color: #1f1f1f;
    }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        background-color: #1f1f1f;
        color:#f8f8f8;
    }
</style>
<header style="padding: 80px 0;">
<h1 style="text-align: center;font-weight:700">動畫作品<span style="display: block;font-size:16px;margin-top:10px">Animate works</span></h1>
</header>
<div style="width: 80%;margin:auto;">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="sea-tab" data-bs-toggle="tab" data-bs-target="#sea" type="button" role="tab" aria-controls="sea" aria-selected="true">海洋</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="ice-tab" data-bs-toggle="tab" data-bs-target="#ice" type="button" role="tab" aria-controls="ice" aria-selected="false">冰原</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="wild-tab" data-bs-toggle="tab" data-bs-target="#wild" type="button" role="tab" aria-controls="wild" aria-selected="false">野原</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="cave-tab" data-bs-toggle="tab" data-bs-target="#cave" type="button" role="tab" aria-controls="cave" aria-selected="false">洞窟</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="plant-tab" data-bs-toggle="tab" data-bs-target="#plant" type="button" role="tab" aria-controls="plant" aria-selected="false">植原</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">居家</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="woods-tab" data-bs-toggle="tab" data-bs-target="#woods" type="button" role="tab" aria-controls="woods" aria-selected="false">森林</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="lake-tab" data-bs-toggle="tab" data-bs-target="#lake" type="button" role="tab" aria-controls="lake" aria-selected="false">池塘</button>
        </li>
    </ul>
    <div class="tab-content mt-5" id="myTabContent">
        <div class="tab-pane fade show active" id="sea" role="tabpanel" aria-labelledby="sea-tab">
            <div>
                <?php include "./animate_works/whale.php"; ?>
            </div>
            <br><br><br><br>
            <div>
                <?php include "./animate_works/shark.php"; ?>
            </div>
        </div>
        <div class="tab-pane fade" id="ice" role="tabpanel" aria-labelledby="ice-tab">...</div>
        <div class="tab-pane fade" id="wild" role="tabpanel" aria-labelledby="wild-tab">...</div>
        <div class="tab-pane fade" id="cave" role="tabpanel" aria-labelledby="cave-tab">...</div>
        <div class="tab-pane fade" id="plant" role="tabpanel" aria-labelledby="plant-tab">...</div>
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
        <div class="tab-pane fade" id="woods" role="tabpanel" aria-labelledby="woods-tab">...</div>
        <div class="tab-pane fade" id="lake" role="tabpanel" aria-labelledby="lake-tab">...</div>
    </div>
</div>