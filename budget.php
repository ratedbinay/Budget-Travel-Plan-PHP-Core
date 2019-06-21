<style type="text/css">
* {
  margin: 0;
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 4px 6px;
  border: 0;
  box-sizing: border-box;
  &:before, &:after {
    box-sizing: inherit;
    z-index: 99;
  }
}


// LET THE LOADING BEGIN
.start-screen {
  font-size: 30px;
  display: flex;
  justify-content: center;
  flex-flow: nowrap column;
  align-items: center;
  min-height: 100vh;
}
.loading {
  font-size: 30px;
  display: flex;
  margin: 05px ;
}
.loading__element {
  font-size: 40px;
  
  letter-spacing: .2em;
}
[class*="el"] {
  animation: bouncing 2s infinite ease;
}

@for $i from 1 through 9 {
  $delay: percentage($i);
  .el#{$i} {
    animation-delay: $delay / 1000% + s;
  }
}

@keyframes bouncing {
  0%, 100% {
    transform: scale3d(1,1,1);
  }
  50% {
    transform: scale3d(0,0,1);
  }
}
</style>




<div class="start-screen">

  <div class="loading">
    <div class="loading__element el1">B</div>
    <div class="loading__element el2">U</div>
    <div class="loading__element el3">D</div>
    <div class="loading__element el4">G</div>
    <div class="loading__element el5">E</div>
    <div class="loading__element el6">T</div>
    <div class="loading__element el6">&nbsp</div>
    <div class="loading__element el1">T</div>
    <div class="loading__element el2">R</div>
    <div class="loading__element el3">A</div>
    <div class="loading__element el4">V</div>
    <div class="loading__element el5">E</div>
    <div class="loading__element el6">L</div>
    <div class="loading__element el6">&nbsp</div>
    <div class="loading__element el1">P</div>
    <div class="loading__element el2">L</div>
    <div class="loading__element el3">A</div>
    <div class="loading__element el4">N</div>
  
    

  </div>