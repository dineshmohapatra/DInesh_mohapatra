import { useState } from 'react';
function MyForm() {
    const [name,setName] = useState('');
    console.log(name);
    const handleSubmit = (event) => {
    event.preventDefault();
  }
  return (
    <form onSubmit={handleSubmit}>
      <label>Enter your name:
        <input type="text" 
               value={name}
               onChange={(e) => setName(e.target.value)}
        />
      </label>
    </form>
  )
}

export default MyForm ;