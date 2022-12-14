<html>
<head>
  <style type="text/css">
    body {
  align-items: center;
  background: #f1eef1;
  display: flex;
  font-family: sans-serif;
  justify-content: center;
  height: 100vh;
  margin: 0;
}
.container {
  align-items: center;
  /*       background: #F1EEF1;
  border: 1px solid #D2D1D4;
  */
  display: flex;
  height: 360px;
  justify-content: center;
  width: 360px;
}
.email {
  background: #dedbdf;
  border-radius: 16px;
  height: 32px;
  overflow: hidden;
  position: relative;
  width: 162px;
  -webkit-tap-highlight-color: transparent;
  transition: width 300ms cubic-bezier(0.4, 0, 0.2, 1),
    height 300ms cubic-bezier(0.4, 0, 0.2, 1),
    box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1),
    border-radius 300ms cubic-bezier(0.4, 0, 0.2, 1);
}
.email:not(.expand) {
  cursor: pointer;
}
.email:not(.expand):hover {
  background: #c2c0c2;
}
.from {
  position: absolute;
  transition: opacity 200ms 100ms cubic-bezier(0, 0, 0.2, 1);
}
.from-contents {
  display: flex;
  flex-direction: row;
  transform-origin: 0 0;
  transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
}
.to {
  opacity: 0;
  position: absolute;
  transition: opacity 100ms cubic-bezier(0.4, 0, 1, 1);
}
.to-contents {
  transform: scale(0.55);
  transform-origin: 0 0;
  transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
}
.avatar {
  border-radius: 12px;
  height: 24px;
  left: 6px;
  position: relative;
  top: 4px;
  width: 24px;
}
.name {
  font-size: 14px;
  line-height: 32px;
  margin-left: 10px;
}
.top {
  background: #6422eb;
  display: flex;
  flex-direction: row;
  height: 70px;
  transition: height 300ms cubic-bezier(0.4, 0, 0.2, 1);
  width: 300px;
}
.avatar-large {
  border-radius: 21px;
  height: 42px;
  margin-left: 12px;
  position: relative;
  top: 14px;
  width: 42px;
}
.name-large {
  color: #efd8ef;
  font-size: 16px;
  line-height: 70px;
  margin-left: 20px;
}
.x-touch {
  align-items: center;
  align-self: center;
  cursor: pointer;
  display: flex;
  height: 50px;
  justify-content: center;
  margin-left: auto;
  width: 50px;
}
.x {
  background: #ba87f9;
  border-radius: 10px;
  height: 20px;
  position: relative;
  width: 20px;
}
.x-touch:hover .x {
  background: #cb9afb;
}
.line1 {
  background: #6422eb;
  height: 12px;
  position: absolute;
  transform: translateX(9px) translateY(4px) rotate(45deg);
  width: 2px;
}
.line2 {
  background: #6422eb;
  height: 12px;
  position: absolute;
  transform: translateX(9px) translateY(4px) rotate(-45deg);
  width: 2px;
}
.bottom {
  background: #fff;
  color: #444247;
  font-size: 14px;
  height: 200px;
  padding-top: 5px;
  width: 300px;
}
.row {
  align-items: center;
  display: flex;
  flex-direction: row;
  height: 60px;
}
.twitter {
  margin-left: 16px;
  height: 30px;
  position: relative;
  top: 0px;
  width: 30px;
}
.medium {
  height: 30px;
  margin-left: 16px;
  position: relative;
  width: 30px;
}
.link {
  margin-left: 16px;
}
.link a {
  color: #444247;
  text-decoration: none;
}
.link a:hover {
  color: #777579;
}
.email.expand {
  border-radius: 6px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1), 0 6px 6px rgba(0, 0, 0, 0.16);
  height: 200px;
  width: 300px;
}
.expand .from {
  opacity: 0;
  transition: opacity 100ms cubic-bezier(0.4, 0, 1, 1);
}
.expand .from-contents {
  transform: scale(1.91);
}
.expand .to {
  opacity: 1;
  transition: opacity 200ms 100ms cubic-bezier(0, 0, 0.2, 1);
}
.expand .to-contents {
  transform: scale(1);
}

  </style>
</head>
<body>
<div class="container">
  <div class="email" onclick="this.classList.add('expand')">
    <div class="from">
      <div class="from-contents">
        <div class="avatar me"></div>
        <div class="name">Mikael Ainalem</div>
      </div>
    </div>
    <div class="to">
      <div class="to-contents">
        <div class="top">
          <div class="avatar-large me"></div>
          <div class="name-large">Mikael Ainalem</div>
          <div class="x-touch" onclick="document.querySelector('.email').classList.remove('expand');event.stopPropagation();">
            <div class="x">
              <div class="line1"></div>
              <div class="line2"></div>
            </div>
          </div>
        </div>
        <div class="bottom">
          <div class="row">
            <svg class="twitter" viewBox="0 0 300 244.18703">
              <g transform="translate(-539.17946,-568.85777)" id="layer1">
                <path id="path3611" style="fill:#1da1f2;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 633.89823,812.04479 c 112.46038,0 173.95627,-93.16765 173.95627,-173.95625 0,-2.64628 -0.0539,-5.28062 -0.1726,-7.90305 11.93799,-8.63016 22.31446,-19.39999 30.49762,-31.65984 -10.95459,4.86937 -22.74358,8.14741 -35.11071,9.62551 12.62341,-7.56929 22.31446,-19.54304 26.88583,-33.81739 -11.81284,7.00307 -24.89517,12.09297 -38.82383,14.84055 -11.15723,-11.88436 -27.04079,-19.31655 -44.62892,-19.31655 -33.76374,0 -61.14426,27.38052 -61.14426,61.13233 0,4.79784 0.5364,9.46458 1.58538,13.94057 -50.81546,-2.55686 -95.87353,-26.88582 -126.02546,-63.87991 -5.25082,9.03545 -8.27852,19.53111 -8.27852,30.73006 0,21.21186 10.79366,39.93837 27.20766,50.89296 -10.03077,-0.30992 -19.45363,-3.06348 -27.69044,-7.64676 -0.009,0.25652 -0.009,0.50661 -0.009,0.78077 0,29.60957 21.07478,54.3319 49.0513,59.93435 -5.13757,1.40062 -10.54335,2.15158 -16.12196,2.15158 -3.93364,0 -7.76596,-0.38716 -11.49099,-1.1026 7.78383,24.2932 30.35457,41.97073 57.11525,42.46543 -20.92578,16.40207 -47.28712,26.17062 -75.93712,26.17062 -4.92898,0 -9.79834,-0.28036 -14.58427,-0.84634 27.05868,17.34379 59.18936,27.46396 93.72193,27.46396"/>
              </g>
            </svg>
            <div class="link"><a href="https://twitter.com/mikaelainalem">@mikaelainalem</a></div>
          </div>
          <div class="row">
            <svg class="medium" viewBox="0 0 24 24">
              <style type="text/css" id="style2">
                .st0{fill:#3DD87F;}
                .st1{fill:#FFFFFF;}
              </style>
              <g id="Page-1" transform="translate(0,1)">
                <g id="Monogram">
                  <rect id="Rectangle-path" x="0" y="-1" class="st0" width="24" height="24" style="fill:#000000;fill-opacity:1;stroke-width:1.090909"/>
                  <path id="Shape" class="st1" d="m 6.3,7.6 c 0,-0.2 -0.1,-0.4 -0.2,-0.5 l -1.3,-1.7 v -0.2 h 4.3 l 3.3,7.3 2.9,-7.3 h 4.1 v 0.2 l -1.2,1.1 c -0.1,0.1 -0.2,0.2 -0.1,0.3 v 8.3 c 0,0.1 0,0.3 0.1,0.3 l 1.2,1.1 v 0.2 h -5.8 v -0.2 l 1.2,-1.2 c 0.1,-0.1 0.1,-0.2 0.1,-0.3 v -6.6 l -3.3,8.4 h -0.4 l -4,-8.4 v 5.6 c 0,0.2 0,0.5 0.2,0.6 l 1.6,1.9 v 0.2 h -4.4 v -0.2 l 1.5,-1.8 c 0.2,-0.2 0.2,-0.4 0.2,-0.6 z" inkscape:connector-curvature="0" style="fill:#ffffff"/>
                </g>
              </g>
            </svg>
            <div class="link"><a href="https://medium.com/@mikael_ainalem">@mikael_ainalem</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>