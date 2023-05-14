import React from 'react';

const ToDo = ({todo,handleToggle}) => {

    const handleClick = (e) => {
        alert("handle Click Called!! of list ID is"+e.currentTarget.id);
        e.preventDefault()
        handleToggle(e.currentTarget.id)
    }

    return (
        <li id={todo.id}  value={todo.id} className={todo.complete?'todo strike':''} onClick={handleClick}>{todo.task}</li>
    );
};

export default ToDo;