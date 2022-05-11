const college = ['LPU', 'CU', 'Chandigarh university', 'Lovely professional university', 'Punjab university', 'PU', 'Chitkara'];
document.getElementById('search').addEventListener('input', (e)=>{
    let clgArray = [];
    
    if(e.target.value){
        clgArray = college.filter(college => college.toLowerCase().includes(e.target.value));
        clgArray = clgArray.map(college => `<li>${college}</li>`)
    }
    showclgArray(clgArray);
});
function showclgArray(clgArray){
    const html = !clgArray.length ? '' : clgArray.join('');
    document.querySelector('ul').innerHTML = html;
}