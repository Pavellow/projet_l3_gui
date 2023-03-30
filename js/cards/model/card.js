function Carte(nom, label, ref, img, desc) {
    this.nom = nom;
    this.label = label;
    this.ref = ref;
    this.img = img;
    this.desc = desc;
}

Carte.prototype.show_console = function() {
    console.log(this);
}