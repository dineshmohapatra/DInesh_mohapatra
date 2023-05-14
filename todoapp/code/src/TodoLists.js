import React from 'react';
import ToDo from './ToDo';

const ToDoList = ({toDoList,handleToggle,x}) => {
    return (
        <div>
            <ul>
            {toDoList.map(todo => {
                return (
                    
                        <ToDo todo={todo} handleToggle={handleToggle} />
                   
                )
            })}
            </ul>
            <button style={{margin: '20px'}} onClick={x}>Clear Completed</button>
        </div>
    );
};

export default ToDoList;