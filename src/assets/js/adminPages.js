function profile(){
    document.getElementById('profile').classList.toggle('hidden');
}
function Newpost(){
    document.getElementById('lesPost').classList.toggle('hidden');
}
function toggelPopapCategourie(){
    document.querySelector('.popapCategourie').classList.toggle('hidden');
}
function toggelPopapTages(){
    document.querySelector('.popapTages').classList.toggle('hidden');
}
function cours(){
    document.querySelector('.listecours').classList.remove('hidden');
    document.querySelector('.listecategory').classList.add('hidden');
    document.querySelector('.listetages').classList.add('hidden');

    document.querySelector('.spanListCours').classList.remove('bg-transparent');
    document.querySelector('.spanListCours').classList.add('bg-rose-500');
    document.querySelector('.spanListCategory').classList.remove('bg-rose-500');
    document.querySelector('.spanListCategory').classList.add('bg-transparent');
    document.querySelector('.spanListTages').classList.add('bg-transparent');
    document.querySelector('.spanListTages').classList.remove('bg-rose-500');
}
function tages(){
    document.querySelector('.listetages').classList.remove('hidden');
    document.querySelector('.listecategory').classList.add('hidden');
    document.querySelector('.listecours').classList.add('hidden');

    document.querySelector('.spanListTages').classList.remove('bg-transparent');
    document.querySelector('.spanListTages').classList.add('bg-rose-500');
    document.querySelector('.spanListCategory').classList.remove('bg-rose-500');
    document.querySelector('.spanListCategory').classList.add('bg-transparent');
    document.querySelector('.spanListCours').classList.add('bg-transparent');
    document.querySelector('.spanListCours').classList.remove('bg-rose-500');
}
function category(){
    document.querySelector('.listecategory').classList.remove('hidden');
    document.querySelector('.listecours').classList.add('hidden');
    document.querySelector('.listetages').classList.add('hidden');

    document.querySelector('.spanListCategory').classList.remove('bg-transparent');
    document.querySelector('.spanListCategory').classList.add('bg-rose-500');
    document.querySelector('.spanListCours').classList.remove('bg-rose-500');
    document.querySelector('.spanListCours').classList.add('bg-transparent');
    document.querySelector('.spanListTages').classList.add('bg-transparent');
    document.querySelector('.spanListTages').classList.remove('bg-rose-500');
}