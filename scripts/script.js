const products = [];

// GET CORRECT DOCUMENTATION
// product object definition
class Product {
    // some of the parameters will be visible to the users & some of them will be for owners sake & documentation & pricing purposes
    constructor(name, photos, price, description, category, dimensions, weight, packageDimensions, packageWeight) {
        this.name = name;
        this.photos = photos;
        this.price = price;
        this.description = description;
        this.category = category;
        this.dimensions = dimensions;
        this.weight = weight;
        this.packageDimensions = packageDimensions;
        this.packageWeight = packageWeight;
    }
}

// have this only available for me. So i dont have to hard code new products into the program. I have this that does it for me What about storage when the site goes off? need them to be saved.
function addProduct() {
    // collect info & upload photos

    // create new product object with info as params
    const newProduct = new Product();

    // add that product to our list of products (confirm with user if want to do so!)
    products.push(newProduct);
}
