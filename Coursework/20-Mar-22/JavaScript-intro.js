function printFromJS() {
    const str = "External script printing :)";
    let arr = ['Kokomi', 'Lisa', 'Ningguang'];
    document.write(str);
    console.log(arr.toString());
}

function DocObjModel() {
    let link = document.links.mylink.href;
    console.log(link);
}