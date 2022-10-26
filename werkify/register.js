// const submit = document.getElementById('submit')
// var message = 'Are you sure you want to submit?'
// submit.addEventListener('click',()=>{
//     confirm(message)
//     if(confirm)
//     {
        
//     }
// })
const hid = document.getElementById('l-icon')
const hid2 = document.getElementById('l-icon2')
const hid3 = document.getElementById('l-icon3')
const sub = document.getElementById('subhidden')
const sub2 = document.getElementById('subhidden2')
const sub3 = document.getElementById('subhidden3')
const sub4 = document.getElementById('subhidden4')
hid.addEventListener('mouseover',()=>{
    sub.id='sub'
    console.log('Button hover')
})
hid.addEventListener('mouseleave',()=>{
    sub.id='subhidden'
})

hid2.addEventListener('mouseover',()=>{
    sub2.id='sub'
    console.log('Button hover')
})
hid2.addEventListener('mouseleave',()=>{
    sub2.id='subhidden'
})

hid3.addEventListener('mouseover',()=>{
    sub3.id='sub'
    console.log('Button hover')
})
hid3.addEventListener('mouseleave',()=>{
    sub3.id='subhidden'
})