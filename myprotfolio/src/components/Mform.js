import { useState } from 'react';
function MForm() {
    const [inputs,setInputs] = useState({});
    console.log(inputs);
    const handleChange =(event)=>{
        const name = event.target.name;
        const value = event.target.value;
        setInputs(x => ({...x, [name]: value}))
    }


    const handleSubmit = (event) => {
    event.preventDefault();
  }
  return (
    <form onSubmit={handleSubmit}>
      <label>Enter your name:
        <input type="text" 
               name="uname"
               value={inputs.uname ||''}
               onChange={handleChange}
        />
      </label>

      <label>Enter your name:
        <input type="text" 
               name="email"
               value={inputs.email ||''}
               onChange={handleChange}
        />
      </label>
    </form>
  )
}

export default MForm ;