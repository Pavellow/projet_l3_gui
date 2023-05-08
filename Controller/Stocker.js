class Stocker {
    constructor(id) {
        this.id = id;
        this.stock = new Array();
    }

    display() {
      console.log(this.id, this.stock);
    }

    
}