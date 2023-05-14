import './App.css';
import Test from './components/Test';
import CarList from './components/CarList';
import MyForm from './components/MyForm';
import MForm from './components/Mform';
function App() {
  const student ={name:'Alok' ,email:'alok@gmail.com',mobile:'9432323234'};
  return (
     <div  className="App">
         <Test std={student}/>
         <CarList/>
         <MyForm/>
         <MForm/>
     </div>
  );
}

export default App;
