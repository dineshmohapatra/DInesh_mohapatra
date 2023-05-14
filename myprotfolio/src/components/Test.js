const Test = (props) => {
   const msg =(m,e)=>{
        alert('Hi ,'+m);
        alert(typeof e);
        alert(e.type);
        if(e.type ==='mouseover'){
               alert('This event is on mouse over');
        }
        if(e.type ==='click'){
            alert('This event is click event');
        }
   }
    
    return(
        
       <>

        <h1>Name : {props.std.name} </h1>
        <h1>Email : {props.std.email} </h1>
        <h1>Mobile : {props.std.mobile} </h1>
        <button onClick={(event) => msg("Rahul",event)}>Click me</button>
        <button onMouseOver={(event) => msg("Rahul",event)}>Mouse Event</button>
       </>
    );
 }
 export default Test;