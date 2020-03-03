//q라는 변수의 내부 함수로 지정하여 함수의 그룹핑을 해준다
var q = {
  v1:'v1',
  v2:'v2',
  f1:function(){
    console.log(this.v1);
  },
  f2:function(){
    console.log(this.v1);
  }
}
q.f1();
q.f2();
