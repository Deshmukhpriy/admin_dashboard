<style>
/* body{
  background-color:rgb(0, 0, 40)
} */

.acc-wraper{
  margin: 30px auto;
  width:50%;
  
}

.accordion{
  display:flex;
  flex-wrap:nowrap;
  overflow:hidden;
  width:100%;
  height:350px
}

.accordion > div{
  width:50%;
  flex-grow:1;
  flex-shrink:1;
  overflow:hidden;
  transition:all .5s ease;
  border:5px solid aliceblue;
  border-radius:50px;
  position:relative
}

.accordion > div:hover{
  flex-shrink:0
}

.accordion div img{
  width:100%;
  height:100%;
  object-fit: cover;
}
</style>
<div class="acc-wraper">
  <div class="accordion">
    <div>
      <img src="images/wheat.jpg" alt="">
    </div>
    <div>
      <img src="images/image1.jpg" alt="">
    </div>
    <div>
      <img src="images/legum.jpg" alt="">
    </div>
    <div>
      <img src="images/sesame1.jpg" alt="">
    </div>
    <div>
      <img src="images/dal.webp" alt="">
    </div>
    <div>
      <img src="images/cash1.jpg" alt="">
    </div>
  </div>
</div>