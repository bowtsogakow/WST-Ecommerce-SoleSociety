// document.addEventListener("DOMContentLoaded", function() {
//     function returnHTML() {
//         const htmlContent = `
//             <a href="#" class="redirect-link" data-variable="1">
//                 <div class="product">
//                     <p id ="hello">Digumana</p>
//                 </div>
//             </a>
//         `;
//         const item = document.getElementById('item');
//         if (item) {
//             item.innerHTML = htmlContent;
//             console.log("Content inserted successfully!");
//             return htmlContent;
//         } else {
//             console.error("Element with ID 'item' not found.");
//             return null;
//         }
//     }

//     returnHTML(); // Call the function to set the content on document load
// });


// document.addEventListener("DOMContentLoaded", function() {
//     function returnHTML(times) {
//         let content = '';
//         for (let i = 0; i < times; i++) {
//             content += `
//                 <a href="#" class="redirect-link" data-variable="${i + 1}">
//                     <div class="product">
//                         <p id="hello${i}">Digumana</p>
//                     </div>
//                 </a>
//             `;
//         }

//         const item = document.getElementById('item');
//         if (item) {
//             item.innerHTML = content;
//             console.log(`Content inserted successfully ${times} times!`);
//             return content;
//         } else {
//             console.error("Element with ID 'item' not found.");
//             return null;
//         }
//     }

//     const numberOfTimes = 5; // Change this value to the number of times you want to display the content
//     returnHTML(numberOfTimes); // Call the function to set the content on document load
// });


// fetch('test.php')
// .then(response => {
//     if (!response.ok) {
//       throw new Error('Network response was not ok');
//     }
//     return response.json(); // Parse the response as JSON
//   })
//   .then(data => {
//     let itemsHTML = ''; // Variable to accumulate HTML content

//     data.forEach(item => {
//       console.log("id: " + item.id);
//       itemsHTML += "id: " + item.id; // Accumulate HTML content
//     });
//     // Set the accumulated HTML to the element outside the loop
//    document.getElementById('hello').innerHTML = itemsHTML;
//   })
//   .catch(error => console.error('Error:', error));



// function showItem(){
// fetch('test.php')// reference the php file where the query happens
//   .then(response => {
//     if (!response.ok) {
//       throw new Error('Network response was not ok');// check if the connection to the php is okay
//     }
//     return response.json(); // Parse the response as JSON
//   })
//   .then(data => {
//     let itemsHTML = ''; // Variable to accumulate HTML content

//     data.forEach(item => {
//       console.log("id: " + item.id); // get the necessary data from the php file 
//       itemsHTML += `
        
//       <a href="item_view.php?myVariable= ${item.id}" >
//         <div class="product">
//         <p>id: ${item.id}</p>
//         </div>
//       </a>
        
//       `;// put it in a block of code in html 
//     });
//     // Set the accumulated HTML to the element outside the loop
//     const productContainer = document.getElementById('item');// putting that block of code in the html file by getting the id of div
//     if (productContainer) {
//       productContainer.innerHTML = itemsHTML;//putting that block in the div
//     } else {
//       console.error("Element with ID 'item' not found.");// check if the id is existing
//     }
//   })
//   .catch(error => console.error('Error:', error));// check if the data is missing or any other error

  
// }


// function showItem() {
//   const option1 = document.getElementById('option1').checked;
//   const option2 = document.getElementById('option2').checked;
//   const option3 = document.getElementById('option3').checked;
//   const option4 = document.getElementById('option4').checked;
//   const option5 = document.getElementById('option5').checked;
//   const option6 = document.getElementById('option6').checked;
//   const option7 = document.getElementById('option7').checked;
//   const option8 = document.getElementById('option8').checked;
//   const menCheckbox = document.getElementById('menCheckbox').checked; // Get the state of the 'men' checkbox

//   let filter = [];
//   if (option1) filter.push('nike');
//   if (option2) filter.push('new balance');
//   if (option3) filter.push('converse');
//   if (option4) filter.push('ewan');
//   if (option2) filter.push('adidas');
//   if (option3) filter.push('vans');
//   if (option4) filter.push('dior');
//   if (option4) filter.push('rebook');

//   if (menCheckbox) {
//     filter.push('men'); // Include 'men' as a filter when the checkbox is checked
//   }

//   fetch('test.php?filter=' + filter.join(',')) // Sending selected options as a parameter
//       .then(response => {
//           if (!response.ok) {
//               throw new Error('Network response was not ok');
//           }
//           return response.json();
//       })
//       .then(data => {
//         if (Array.isArray(data)) {
//             let itemsHTML = '';
//             data.forEach(item => {
//                 itemsHTML += `
//                     <a href="item_view.php?myVariable=${item.id}">
//                         <div class="product">
//                             <p>id: ${item.id}</p>
//                             <p>Brand: ${item.Brand}</p>
//                             <p>Name: ${item.Name}</p>
//                             <p>Men: ${item.Men}</p>
//                         </div>
//                     </a>
//                 `;
//             });
//             const productContainer = document.getElementById('item');
//             if (productContainer) {
//                 productContainer.innerHTML = itemsHTML;
//             } else {
//                 console.error("Element with ID 'item' not found.");
//             }
//         } else if (data.error === 'No data found') {
//             const productContainer = document.getElementById('item');
//             if (productContainer) {
//                 productContainer.innerHTML = 'No items found.';
//             } else {
//                 console.error("Element with ID 'item' not found.");
//             }
//         } else {
//             console.error('Data format not as expected:', data);
//         }
//     })
//     .catch(error => console.error('Error:', error));}

// showItem();
function updatePriceRangeValues() {
    const minPrice = document.getElementById('minPrice').value;
    const maxPrice = document.getElementById('maxPrice').value;

    return `${minPrice}-${maxPrice}`;
}
function showItem() {
    console.log('showItem function called');
    
    let filter = [];
    const option1 = document.getElementById('option1').checked;
    const option2 = document.getElementById('option2').checked;
    const option3 = document.getElementById('option3').checked;
    const option4 = document.getElementById('option4').checked;
    const option5 = document.getElementById('option5').checked;
    const option6 = document.getElementById('option6').checked;
    const option7 = document.getElementById('option7').checked;
    const option8 = document.getElementById('option8').checked;

    const minPrice = document.getElementById('minPrice').value;
    const maxPrice = document.getElementById('maxPrice').value;

    const menCheckbox = document.getElementById('menCheckbox').checked ? document.getElementById('menCheckbox').value : null;
    const womenCheckbox = document.getElementById('womenCheckbox').checked ? document.getElementById('womenCheckbox').value : null;
    const kidsCheckbox = document.getElementById('kidsCheckbox').checked ? document.getElementById('kidsCheckbox').value : null;
    const runningCheckbox = document.getElementById('runningCheckbox').checked ? document.getElementById('runningCheckbox').value : null;
    const basketballCheckbox = document.getElementById('basketballCheckbox').checked ? document.getElementById('basketballCheckbox').value : null;
    const aestheticCheckbox = document.getElementById('aestheticCheckbox').checked ? document.getElementById('aestheticCheckbox').value : null;
    const skateboardingCheckbox = document.getElementById('skateboardingCheckbox').checked ? document.getElementById('skateboardingCheckbox').value : null;
    

    const size3CB = document.getElementById('size3CB').checked ? document.getElementById('size3CB').value : null;
    const size4CB = document.getElementById('size4CB').checked ? document.getElementById('size4CB').value : null;
    const size5CB = document.getElementById('size5CB').checked ? document.getElementById('size5CB').value : null;
    const size6CB = document.getElementById('size6CB').checked ? document.getElementById('size6CB').value : null;
    const size7CB = document.getElementById('size7CB').checked ? document.getElementById('size7CB').value : null;
    const size8CB = document.getElementById('size8CB').checked ? document.getElementById('size8CB').value : null;
    const size9CB = document.getElementById('size9CB').checked ? document.getElementById('size9CB').value : null;
    const size10CB = document.getElementById('size10CB').checked ? document.getElementById('size10CB').value : null;
    const size11CB = document.getElementById('size11CB').checked ? document.getElementById('size11CB').value : null;
    const size12CB = document.getElementById('size12CB').checked ? document.getElementById('size12CB').value : null;
   
    if (minPrice !== '' && maxPrice !== '') {
        const priceRange = updatePriceRangeValues();
        filter.push(`price${priceRange}`);
    }

 
    if (option1) filter.push('nike');
    if (option2) filter.push('new balance');
    if (option3) filter.push('converse');
    if (option4) filter.push('ewan');
    if (option5) filter.push('adidas'); // Fixed option number
    if (option6) filter.push('vans'); // Fixed option number
    if (option7) filter.push('dior'); // Fixed option number
    if (option8) filter.push('reebok'); // Fixed option number
    if (menCheckbox) filter.push(menCheckbox); // Men checkbox functionality (existing)
    if (womenCheckbox) filter.push(womenCheckbox); // Women checkbox functionality (new)
    if (kidsCheckbox) filter.push(kidsCheckbox);
    if (runningCheckbox) filter.push(runningCheckbox);
    if (basketballCheckbox) filter.push(basketballCheckbox);
    if (aestheticCheckbox) filter.push(aestheticCheckbox);
    if (skateboardingCheckbox) filter.push(skateboardingCheckbox);
    
    if (size3CB) filter.push(size3CB);
    if (size4CB) filter.push(size4CB);
    if (size5CB) filter.push(size5CB);
    if (size6CB) filter.push(size6CB);
    if (size7CB) filter.push(size7CB);
    if (size8CB) filter.push(size8CB);
    if (size9CB) filter.push(size9CB);
    if (size10CB) filter.push(size10CB);
    if (size11CB) filter.push(size11CB);
    if (size12CB) filter.push(size12CB);

      

// if(document.getElementById('LTH').checked){
//         filter.push('asc');


// }
// if(document.getElementById('HTL').ariaSelected){
//     filter.push('desc');
// }
var sortOrder = document.getElementById("sortOrder").value;


if (sortOrder === "asc") {
    filter.push("asc");
} else if (sortOrder === "desc") {
    filter.push("desc");
}

    let params = '';
 

    if (filter.length > 0) {
        
        params = `filter=${filter.join(',')}`; // Otherwise, set 'filter' parameter
          
        
      } 
    
    
      console.log(params);
     
      fetch('../html/query_items.php?' + params)
      .then(response => {
          if (!response.ok) {
              throw new Error('Network response was not ok');
          }
          return response.json();
      })
      .then(data => {
          if (Array.isArray(data)) {
              // Processing the received data
              let itemsHTML = '';
              data.forEach(item => {

                let formattedPrice = new Intl.NumberFormat('en-PH', {
                    style: 'currency',
                    currency: 'PHP'
                }).format(item.Price);
                  // Construct HTML based on each item
                  itemsHTML += `
                  <div class ="list">    
                      <a href="item.php?myVariable=${item.id}">
                      <div class="product">
                      <div id ="imageScr">
                      <img src="../WSTShoesNoBackground/${item.filename}" alt="${item.Name}" id = "shoe_img">
                        </div>
                        <div id ="text">  
                        <div id="nameText">
                      <p id="nameName">${item.Name}</p>
                        </div>
                    <div id="text2">
                      <p id="brandName">${item.Brand}</p>
                      <p id="priceName">${formattedPrice}</p>
                      </div>
                          <!-- Add other attributes as needed -->
                          </div>  
                      </div>
                      </a>
                 </div>
                  `;
              });
  
              const productContainer = document.getElementById('item');
              if (productContainer) {
                  productContainer.innerHTML = itemsHTML;
              } else {
                  console.error("Element with ID 'item' not found.");
              }
          } else {
            const errorMessage = document.getElementById('item');
            let itemsHTML = '';
            itemsHTML += `
                      
                          <p>No Item FOund</p>
                      
                  `;
                  if (errorMessage) {
                    errorMessage.innerHTML = itemsHTML;
                }
              console.error('Data received is not an array');
              console.log('Received data:', data);
              // Additional error handling or data structure analysis
          }
      })
      
        .catch(error => console.error('Error:', error));
        
      }
        

    
    











// function showItem() {
//     const checkboxes = {
//         option1: 'nike',
//         option2: 'new balance',
//         option3: 'converse',
//         option4: 'ewan',
//         option5: 'addidas',
//         option6: 'vans',
//         option7: 'dior',
//         option8: 'rebook',
//         menCheckbox: 'men'
//     };

//     const filter = Object.entries(checkboxes)
//         .filter(([id, value]) => id !== 'menCheckbox' && document.getElementById(id).checked)
//         .map(([id, value]) => value);

//     const menCheckbox = document.getElementById('menCheckbox').checked;

//     const params = new URLSearchParams();
//     if (menCheckbox) {
//         params.set('men', '1');
//     }
//     if (filter.length > 0) {
//         params.set('filter', filter.join(','));
//     }

//     const fetchURL = 'test.php?' + params.toString();

//     fetch(fetchURL)
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Network response was not ok');
//             }
//             return response.json();
//         })
//         .then(data => {
//             const productContainer = document.getElementById('item');
//             if (productContainer) {
//                 if (data && Array.isArray(data) && data.length > 0) {
//                     const itemsHTML = data.map(item => `
//                         <a href="item_view.php?myVariable=${item.id}">
//                             <div class="product">
//                                 <p>id: ${item.id}</p>
//                                 <p>Brand: ${item.Brand}</p>
//                                 <p>Name: ${item.Name}</p>
//                                 <p>Name: ${item.Men}</p>
//                             </div>
//                         </a>
//                     `).join('');
//                     productContainer.innerHTML = itemsHTML;
//                 } else {
//                     productContainer.innerHTML = '<p>No items found.</p>';
//                 }
//             } else {
//                 console.error("Element with ID 'item' not found.");
//             }
//         })
//         .catch(error => console.error('Error:', error));
// }

// showItem();





// function showItem() {
//     const checkboxes = {
//         option1: 'nike',
//         option2: 'new balance',
//         option3: 'converse',
//         option4: 'ewan',
//         option5: 'addidas',
//         option6: 'vans',
//         option7: 'dior',
//         option8: 'rebook',
//         menCheckbox: 'men'
//     };

//     const filter = Object.entries(checkboxes)
//         .filter(([id, value]) => id !== 'menCheckbox' && document.getElementById(id).checked)
//         .map(([id, value]) => value);

//     const menCheckbox = document.getElementById('menCheckbox').checked;

//     const params = new URLSearchParams();
//     if (menCheckbox) {
//         params.set('men', '1');
//     }
//     if (filter.length > 0) {
//         params.set('filter', filter.join(','));
//     }

//     const fetchURL = 'test.php?' + params.toString();

//     fetch(fetchURL)
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Network response was not ok');
//             }
//             return response.json();
//         })
//         .then(data => {
//             const productContainer = document.getElementById('item');
//             if (productContainer) {
//                 if (data && Array.isArray(data) && data.length > 0) {
//                     const itemsHTML = data.map(item => `
//                         <a href="item_view.php?myVariable=${item.id}">
//                             <div class="product">
//                                 <p>id: ${item.id}</p>
//                                 <p>Brand: ${item.Brand}</p>
//                                 <p>Name: ${item.Name}</p>
//                                 <p>Men's Shoe: ${item.Men}</p>
//                             </div>
//                         </a>
//                     `).join('');
//                     productContainer.innerHTML = itemsHTML;
//                 } else {
//                     productContainer.innerHTML = '<p>No items found.</p>';
//                 }
//             } else {
//                 console.error("Element with ID 'item' not found.");
//             }
//         })
//         .catch(error => console.error('Error:', error));
// }

// showItem()
