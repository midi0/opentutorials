var f = function(){
  console.log(1+1)
  console.log(1+2)
}
//함수는 배열의 원소로도 존재할 수 있다
var a = [f];
a[0]();

//함수는 객체의 인자로도 존재할 수 있다
var o = {
  func:f
}
o.func();
