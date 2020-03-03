var members = ['a', 'b', 'c'];

var i = 0;
while (i<members.length){
  console.log('array loop', members[i]);
}

var roles = {
  'programmer' : 'a',
  'designer' : 'b',
  'manager' : 'c'
}

for(var name in roles){
  console.log('object =>', name, 'value =>', roles[name]);
}
