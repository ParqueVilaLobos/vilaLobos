let count1 = 1;
let count2 = 1;
let count3 = 1;

setInterval(() => {
    nextImg1()
    nextImg2()
}, 4000)

const nextImg1 = ()=> {
    console.log(count1)
    console.log(`repetição: ${count1}`)

    if(count1 > 5){
        count1 = 1;
    }
    document.getElementById(`radio${count1}`).checked = true
    count1++;
}


const nextImg2 = ()=> {
  
    if(count2 > 5){
        count2 = 1;
    }
        document.getElementById(`radio${count2}Cr2`).checked = true
    count2++;
}

const nextImg3 = ()=> {
  
    if(count3 > 5){
        count3 = 1;
    }
        document.getElementById(`radio${count3}Cr3`).checked = true
    count3++;
}
