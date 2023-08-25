// for the button movement
const student =document.querySelector('#stu');
const teacher =document.querySelector('#teacher');
const acc =document.querySelector('#acc');
const principle =document.querySelector('#principle');
const button =document.querySelector('#btn');
// for the panel movement
const panel =document.querySelector(".slider")
student.classList.add('active');
teacher.addEventListener('click' ,() => {
    button.classList.remove('active2','active3');
    button.classList.add('active1');
    student.classList.remove('active');
    acc.classList.remove('active');
    principle.classList.remove('active');
    teacher.classList.add('active');
    panel.classList.remove('activeacc','activeprinciple');
    panel.classList.add('activeteacher');
})
acc.addEventListener('click' ,() => {
    button.classList.remove('active1','active3');
    button.classList.add('active2');
    student.classList.remove('active');
    acc.classList.add('active');
    principle.classList.remove('active');
    teacher.classList.remove('active');
    panel.classList.remove('activeteacher','activeprinciple');
    panel.classList.add('activeacc');
})
principle.addEventListener('click' ,() => {
    button.classList.remove('active1','active2');
    button.classList.add('active3');
    student.classList.remove('active');
    acc.classList.remove('active');
    principle.classList.add('active');
    teacher.classList.remove('active');
    panel.classList.remove('activeteacher','activeacc');
    panel.classList.add('activeprinciple');
})
student.addEventListener('click' ,() => {
    button.classList.remove('active2','active3','active1');  
    student.classList.add('active');
    acc.classList.remove('active');
    principle.classList.remove('active');
    teacher.classList.remove('active');
    panel.classList.remove('activeteacher','activeacc','activeprinciple');
})



 