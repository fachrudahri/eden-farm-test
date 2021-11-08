var data = [
  {type:"Foo", year:1995},
  {type:"Bar", year:1993},
  {type:"Foobar", year:2020}
  ];

function arraySort(value) {
  const sorts = value.sort((a,b) => a.year - b.year)
  console.log(sorts)
}

arraySort(data);