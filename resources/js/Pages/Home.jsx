import {useState} from "react"
import Menu from "../Components/Menu";

export default function Home(){
    const [count, setCount] = useState(0);

    return <>
        <Menu/>
        <h1>{count}</h1>
        <button onClick={()=>{setCount(count+1)}}>Click</button>
    </>
}