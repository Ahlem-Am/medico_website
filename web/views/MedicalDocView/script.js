// api url
const api_url =
	"http://localhost:3000/mymedicalrecord/2/MedicalDoc";

function show(data) {
    console.log("show")
        let tab =``;
        
        // Loop to access all rows
        for (let r of data.list) {
            tab += 
    `<article class='testimonial_card'>
    <div class='card_avatar'>
      <img src=${r.url} alt='ahlemammar'/>
    </div>
    <div class="card_content">
      
      <p>
      ${r.patientId}
      </p>
    </div>
  </article>`;
        }
        // Setting innerHTML as tab variable
        document.getElementById("docs").innerHTML = tab;
    }
// Defining async function
async function getapi(url) {
	console.log('getapi')
    const spinner = document.getElementById("spinner");
	// Storing response
	const response = await fetch(url, {
      'Content-Type': 'application/json',
      'Access-Control-Allow-Origin:': '*'
    });
	
	// Storing data in form of JSON
	var data = await response.json();
	console.log(data);
	if (response) {
        console.log('done');
		spinner.setAttribute('hidden', '');
	}
	show(data);
}
// Function to hide the loader
function hideloader() {
	document.getElementById('loading').style.display = 'none';
}
// Calling that async function
getapi(api_url);



